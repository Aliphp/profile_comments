<?php
if (!defined('IN_PHPBB'))
{
	exit;
}
/** 
*
* profilecomments [english]
*
* @package profilecomments
* @version 1.0.0
* @copyright (c) 2013 Ali Faraji (Ali@php - http://www.phpbbpersian.com)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
                    
/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
    $lang = array();
}
                        
// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
                        
$lang = array_merge($lang, array(	
	'BACK_PROFILE'					=> 'Back to user profile',
	'CHARACHTER_LIMIT_MAX'			=> 'The maximum allowed length is %u.',
	'CHARACHTER_LIMIT_MIN'			=> 'The minimum allowed length is %u.',
	'COMMENT_COUNT'					=> '1 Comment',
	'COMMENT_DELETE_CONFIRM'		=> 'Are you sure you want to delete this comment ?',
	'COMMENT_EDIT_SUCCESS'			=> 'This comment has been deleted successfully.',
	'COMMENT_SEND_PERMISSION_ERROR'	=> 'You are not allowed to send comment.',
	'COMMENT_SUCCESS_EDIT'			=> 'Comment has been edited successfully.',
	'COMMENT_SUCCESS_PROFILE'		=> 'Your comment has been posted successfully.',
	'COMMENTS_COUNT'				=> '%u Comments',
	'DELETE_COMMENT'				=> 'Delete comment',
	'EDIT_COMMENT'					=> 'Edit comment',
	'NO_COMMENT_ID'					=> 'The requested comment does not exist.',
	'NO_PROFILE_COMMENT'			=> 'There is no comment to display.',
	'NOT_ALLOWED_EDIT_COMMENT'		=> 'You are not allowed to edit this comment.',
	'PROFILE_COMMENT_PM'			=> '%sYour profile%s has recieved new comment by %s: %s',
	'PROFILE_COMMENT_PM_TITLE'		=> 'New comment notification',
	'PROFILE_COMMENTS_MOD'			=> 'Profile comments MOD',
	'SEND_COMMENT'					=> 'Send',
	'SEND_COMMENT_BOX'				=> 'Send a comment',
	'SQL_ERROR'						=> 'An sql error occured.',
	'UNKNOWN_COMMENT_ERROR'			=> 'An unknown error occured.',
));
            
?>