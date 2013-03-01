<?php
/**
*
* @package profilecomments
* @version 1.0.0
* @copyright (c) 2013 Ali Faraji (Ali@php - http://www.phpbbpersian.com)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
class comments
{
	/**
	* Customised version of generate_smilies($mode, $forum_id) function
	*/
	function generate_profile_smilies()
	{
		global $db, $config, $template;
		global $phpbb_root_path;

		$start = request_var('start', 0);
		
		$display_link = false;
		
		$sql = 'SELECT smiley_id
				FROM ' . SMILIES_TABLE . '
				WHERE display_on_posting = 0';
		$result = $db->sql_query_limit($sql, 1, 0, 3600);
		$db->sql_freeresult($result);
			
		$sql = 'SELECT *
			FROM ' . SMILIES_TABLE . '
			WHERE display_on_posting = 1
			ORDER BY smiley_order';
		$result = $db->sql_query($sql, 3600);

		$smilies = array();
		while ($row = $db->sql_fetchrow($result))
		{
			if (empty($smilies[$row['smiley_url']]))
			{
				$smilies[$row['smiley_url']] = $row;
			}
		}
		$db->sql_freeresult($result);

		if (sizeof($smilies))
		{
			$root_path = (defined('PHPBB_USE_BOARD_URL_PATH') && PHPBB_USE_BOARD_URL_PATH) ? generate_board_url() . '/' : $phpbb_root_path;

			foreach ($smilies as $row)
			{
				$template->assign_block_vars('smiley', array(
					'SMILEY_CODE'	=> $row['code'],
					'A_SMILEY_CODE'	=> addslashes($row['code']),
					'SMILEY_IMG'	=> $root_path . $config['smilies_path'] . '/' . $row['smiley_url'],
					'SMILEY_WIDTH'	=> $row['smiley_width'],
					'SMILEY_HEIGHT'	=> $row['smiley_height'],
					'SMILEY_DESC'	=> $row['emotion'])
				);
			}
		}
	}
	
	/**
	* Simplify error triggering
	*@param string $text text of error
	*@param string $linktext text of error link
	*@param strimg $type type of error
	*/
	function error($text, $linktext, $type = E_USER_NOTICE)
	{
		global $user_id, $user, $comment_start, $phpbb_root_path, $phpEx;
		meta_refresh(3, append_sid($phpbb_root_path.'memberlist.'.$phpEx, 'mode=viewprofile&amp;u='.$user_id.''));
		$result = trigger_error(''.$text.'<br /><br /><a href="'.append_sid($phpbb_root_path.'memberlist.'.$phpEx, 'mode=viewprofile&amp;u='.$user_id.'').'">'.$user->lang[$linktext].'</a>', $type);
		return $result;
	}
	
	/**
	* Show comments
	*@param int $user_id id of user
	*/
	function show($user_id)
	{
		global $db, $config, $user, $phpbb_root_path, $auth, $comment, $comment_id, $phpEx, $template;
		
		$start   = request_var('start', 0);
		$limit  = request_var('limit', (int) $config['profile_comments_limit']);

		$pagination_url = append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $user_id);
		
		$sql_array = array(
			'SELECT'    => 'c.*, u.user_id, u.username, u.user_avatar, u.user_avatar_type, u.user_avatar_width, u.user_avatar_height, u.user_colour, u.user_rank',
			'FROM'      => array(
				PROFILE_COMMENTS_TABLE => 'c',
				USERS_TABLE 		   => 'u'
			),
			'WHERE'     =>  'c.profile_id = u.user_id
						AND c.profile_id = ' . $user_id,

			'ORDER_BY'  => 'c.comment_time '. $config['profile_comments_order'],
		);
		$sql = $db->sql_build_query('SELECT', $sql_array);
		$result = $db->sql_query_limit($sql, $limit, $start);

		while($row = $db->sql_fetchrow($result))
		{
		
			// Generate text for display
			$row['bbcode_options'] = (($row['enable_bbcode']) ? OPTION_FLAG_BBCODE : 0) +
				(($row['enable_smilies']) ? OPTION_FLAG_SMILIES : 0) + 
				(($row['enable_magic_url']) ? OPTION_FLAG_LINKS : 0);
			$text = generate_text_for_display($row['text'], $row['bbcode_uid'], $row['bbcode_bitfield'], $row['bbcode_options']);
		
			// User rank
			$sql = 'SELECT rank_title
				FROM ' . RANKS_TABLE . '
				WHERE rank_id = ' . $row['user_rank'] . '';
			$sqlresult = $db->sql_query($sql);
			$rank = $db->sql_fetchrow($sqlresult);
			$db->sql_freeresult($sqlresult);
			
			// Comment edit and delete permissions
			$comdelete_allowed = ($user->data['is_registered'] && ($auth->acl_get('m_delete_profile_comments') || (
				$user->data['user_id'] == $row['poster_id'] &&
				$auth->acl_get('u_delete_own_profile_comments')
			)));
			$comedit_allowed = ($user->data['is_registered'] && ($auth->acl_get('m_edit_profile_comments') || (
				$user->data['user_id'] == $row['poster_id'] &&
				$auth->acl_get('u_edit_own_profile_comments')
			)));
			
				if ($comment == 'edit' && $comment_id && !$comedit_allowed)
				{
					$this->error($user->lang('NOT_ALLOWED_EDIT_COMMENT'),'BACK_PROFILE');
				}
				
				if ($comment == 'delete' && $comment_id && !$comdelete_allowed)
				{
					$this->error($user->lang('NOT_ALLOWED_DELETE_COMMENT'),'BACK_PROFILE');
				}
			
				$template->assign_block_vars('comment', array(
					'TEXT'		    => $text,
					'COMMENT_DATE'			=> $user->format_date($row['comment_time'], false),
					'AVATAR'				=> get_user_avatar($row['user_avatar'], $row['user_avatar_type'], $row['user_avatar_width'] / 2, $row['user_avatar_height'] / 2),
					'USERNAME'				=> $row['username'],
					'COLOUR'				=> $row['user_colour'],
					'COMMENT_ID'			=> $row['comment_id'],
					'RANK_TITLE'			=> $rank['rank_title'],
					'S_COMEDIT_ALLOWED'		=> $comedit_allowed,
					'S_COMDELETE_ALLOWED'	=> $comdelete_allowed,
					'U_COMMENT_EDIT'		=> append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;comment=edit&amp;cid='.$row['comment_id'].'' . (($start) ? "&amp;start=$start" : '') .'&amp;u=' . $user_id . '#message-box'),
					'U_COMMENT_DELETE'		=> append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;comment=delete&amp;cid='.$row['comment_id'].'&amp;u=' . $user_id),
				));
		}
		$db->sql_freeresult($result);
	

		$sql_array['SELECT'] = 'COUNT(c.comment_id) as total_comments';
		$sql = $db->sql_build_query('SELECT', $sql_array);
		$countresult = $db->sql_query($sql);

		$total_comments = $db->sql_fetchfield('total_comments');

		$db->sql_freeresult($countresult);
		
		$template->assign_vars(array(
			'PAGINATION'        => generate_pagination($pagination_url, $total_comments, $config['profile_comments_limit'], $start),
			'PAGE_NUMBER'       => on_page($total_comments, $limit, $start),
			'TOTAL_COMMENTS'    => ($total_comments == 1) ? $user->lang['COMMENT_COUNT'] : sprintf($user->lang['COMMENTS_COUNT'], $total_comments),
			'TOTAL_COMMENTS_NUMERIC' => $total_comments,
		));
		
		return true;

	}
	
	
	/**
	* Submit comment
	*@param array $input inputs for storing comment
	*/
	function submit($input = array())
	{
		global $db;
		foreach($input as $key => $value)
		{
			$input[$key] = $db->sql_escape($value);
			if(is_string($value))
			{
				$input[$key] = utf8_normalize_nfc($value);
			}
		}
		$sql = 'INSERT INTO ' . PROFILE_COMMENTS_TABLE . ' ' . $db->sql_build_array('INSERT', $input);
		$result = $db->sql_query($sql);

		return $result;
	}
	
	/**
	* Edit comment
	*@param array $input inputs for updating comment
	*@param int $comment_id id of comment
	*/
	function edit($input = array(), $comment_id)
	{
		global $db;
		foreach($input as $key => $value)
		{
			$input[$key] = $db->sql_escape($value);
			if(is_string($value))
			{
				$input[$key] = utf8_normalize_nfc($value);
			}
		}

		$sql = 'UPDATE ' . PROFILE_COMMENTS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $input) . ' WHERE comment_id = ' . $comment_id . '';
		$result = $db->sql_query($sql);

		return $result;
	}
	
	/**
	* Delete comment
	*@param int $comment_id id of comment
	*/
	function delete($comment_id)
	{
	global $db;
		$sql = 'DELETE FROM ' . PROFILE_COMMENTS_TABLE . ' 
				WHERE comment_id = ' . $comment_id . '';
		$result = $db->sql_query($sql);
		
		return $result;
	}
}

?>