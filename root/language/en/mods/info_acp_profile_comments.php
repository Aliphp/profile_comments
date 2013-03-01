<?php
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
	'ACP_PROFILE_COMMENTS'						=> 'Profile comments',
	'AUTHOR'									=> 'Author',
	'ENABLE_PROFILE_COMMENTS'					=> 'Enable profile comments MOD',
	'ENABLE_PROFILE_COMMENTS_EXPLAIN'			=> 'If disallowed MOD is disabled.',
	'ENABLE_PRVMSGS_PROFILE_COMMENTS'			=> 'Enable new comment notification by private message',
	'ENABLE_PRVMSGS_PROFILE_COMMENTS_EXPLAIN'	=> 'If disallowed, private message notification is disabled.',
	'GLOBAL_SETTINGS'							=> 'General settings',
	'PROFILE_COMMENTS_ASC'						=> 'Ascending',
	'PROFILE_COMMENTS_DESC'						=> 'Descending',
	'PROFILE_COMMENTS_LIMIT'					=> 'Number of comments per page',
	'PROFILE_COMMENTS_LIMIT_EXPLAIN'			=> 'Default number of comments in profile.',
	'PROFILE_COMMENTS_MAXCHAR'					=> 'Maximum characters per comment',
	'PROFILE_COMMENTS_MAXCHAR_EXPLAIN'			=> 'The number of characters allowed within a comments. Set to 0 for unlimited characters.',
	'PROFILE_COMMENTS_MINCHAR'					=> 'Minimum characters per comment',
	'PROFILE_COMMENTS_MINCHAR_EXPLAIN'			=> 'The number of characters allowed within a comments. The minimum for this setting is 1.',
	'PROFILE_COMMENTS_ORDER'					=> 'Comments order',
	'PROFILE_COMMENTS_ORDER_EXPLAIN'			=> 'Define comments display order',
	'PROFILE_COMMENTS_TITLE'					=> 'Profile comments MOD',
	'PROFILE_COMMENTS_TITLE_EXPLAIN'			=> 'Send Comments in user profiles',
	'PROFILE_COMMENTS_VERSION'					=> '1.0.0',
	'SUBMIT_SETTINGS'							=> 'Save changes',
	'MOD_VERSION'								=> 'MOD version',
));
            
?>