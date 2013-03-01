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
	'BACK_PROFILE'					=> 'بازگشت به پروفایل کاربر',
	'CHARACHTER_LIMIT_MAX'			=> 'حداکثر کاراکتر مجاز %u می باشد.',
	'CHARACHTER_LIMIT_MIN'			=> 'حداقل کاراکتر مجاز %u می باشد.',
	'COMMENT_COUNT'					=> 'یک دیدگاه',
	'COMMENT_DELETE_CONFIRM'		=> 'آیا از حذف کردن این دیدگاه مطمئن هستید ؟',
	'COMMENT_EDIT_SUCCESS'			=> 'دیدگاه با موفقیت حذف شد.',
	'COMMENT_SEND_PERMISSION_ERROR'	=> 'اجازه ارسال دیدگاه ندارید.',
	'COMMENT_SUCCESS_EDIT'			=> 'دیدگاه با موفقیت ویرایش شد.',
	'COMMENT_SUCCESS_PROFILE'		=> 'دیدگاه با موفقیت ارسال شد.',
	'COMMENTS_COUNT'				=> '%u دیدگاه',
	'DELETE_COMMENT'				=> 'حذف دیدگاه',
	'EDIT_COMMENT'					=> 'ویرایش دیدگاه',
	'NO_COMMENT_ID'					=> 'دیدگاه انتخاب شده موجود نیست.',
	'NO_PROFILE_COMMENT'			=> 'دیدگاهی برای نمایش موجود نیست.',
	'NOT_ALLOWED_EDIT_COMMENT'		=> 'اجازه ویرایش این دیدگاه را ندارید.',
	'PROFILE_COMMENT_PM'			=> 'دیدگاه جدیدی در %sپروفایل شما%s توسط %s ارسال شده است: %s',
	'PROFILR_COMMENT_PM_TITLE'		=> 'اطلاع رسانی دیدگاه جدید',
	'SEND_COMMENT'					=> 'ارسال',
	'SEND_COMMENT_BOX'				=> 'ارسال دیدگاه',
	'SQL_ERROR'						=> 'خطای پایگاه داده روی داد.',
	'UNKNOWN_COMMENT_ERROR'			=> 'خطای نامشخصی روی داد.',
));
            
?>