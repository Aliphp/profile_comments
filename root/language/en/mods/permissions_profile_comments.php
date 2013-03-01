<?php
if (!defined('IN_PHPBB'))
{
	exit;
}
/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
    exit;
}

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

$lang['permission_cat']['profile_comments'] = 'Profile Comments';
$lang = array_merge($lang, array(
	'acl_m_delete_profile_comments'			=> array('lang' => 'Can delete profile comments.', 'cat' => 'profile_comments'),
	'acl_m_edit_profile_comments'			=> array('lang' => 'Can edit profile comments.', 'cat' => 'profile_comments'),
	'acl_u_bbcode_profile_comments'			=> array('lang' => 'Can use BBCodes in profile comments.', 'cat' => 'profile_comments'),
	'acl_u_delete_own_profile_comments'		=> array('lang' => 'Can delete own comments on profiles.', 'cat' => 'profile_comments'),
	'acl_u_edit_own_profile_comments'		=> array('lang' => 'Can edit own comments on profiles.', 'cat' => 'profile_comments'),
	'acl_u_flash_profile_comments'			=> array('lang' => 'Can use flash option in profile comments.', 'cat' => 'profile_comments'),
	'acl_u_img_profile_comments'			=> array('lang' => 'Can use images in profile comments.', 'cat' => 'profile_comments'),
	'acl_u_see_profile_comments'			=> array('lang' => 'Can see profile comments.', 'cat' => 'profile_comments'),
	'acl_u_send_profile_comments'			=> array('lang' => 'Can send comments to profiles.', 'cat' => 'profile_comments'),
	'acl_u_smilies_profile_comments'		=> array('lang' => 'Can use smilies in profile comments.', 'cat' => 'profile_comments'),
));
?>