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
	'ACP_PROFILE_COMMENTS'						=> 'دیدگاه های پروفایل',
	'AUTHOR'									=> 'نویدسنده',
	'ENABLE_PROFILE_COMMENTS'					=> 'فعال سازی افزونه ارسال دیدگاه در پروفایل ها',
	'ENABLE_PROFILE_COMMENTS_EXPLAIN'			=> 'اگر غیرفعال باشد، افزونه نمایش داده نخواهد شد.',
	'ENABLE_PRVMSGS_PROFILE_COMMENTS'			=> 'فعال سازی اطلاع رسانی دیدگاه جدید با پیغام خصوصی',
	'ENABLE_PRVMSGS_PROFILE_COMMENTS_EXPLAIN'	=> 'اگر غیرفعال باشد، ارسال دیدگاه جدید به پروفایل کاربر با پیغام خصوصی اطلاع رسانی نخواهد شد.',
	'GLOBAL_SETTINGS'							=> 'تنظیمات عمومی',
	'PROFILE_COMMENTS_ASC'						=> 'صعودی',
	'PROFILE_COMMENTS_DESC'						=> 'نزولی',
	'PROFILE_COMMENTS_LIMIT'					=> 'تعداد دیدگاه ها در هرصفحه',
	'PROFILE_COMMENTS_LIMIT_EXPLAIN'			=> 'تعداد پیشفرض دیدگاه در هرصفحه از دیدگاه های پروفایل.',
	'PROFILE_COMMENTS_MAXCHAR'					=> 'حداکثر کاراکتر برای دیدگاه',
	'PROFILE_COMMENTS_MAXCHAR_EXPLAIN'			=> 'حداکثر کاراکتر مجاز برای استفاده در دیدگاه ها. برای غیرفعال کردن، 0 را وارد کنید.',
	'PROFILE_COMMENTS_MINCHAR'					=> 'حداقل کاراکتر برای دیدگاه',
	'PROFILE_COMMENTS_MINCHAR_EXPLAIN'			=> 'حداقل کاراکتر مجاز برای استفاده در دیدگاه ها. حداقل داده 1 می باشد.',
	'PROFILE_COMMENTS_ORDER'					=> 'چیدمان دیدگاه ها',
	'PROFILE_COMMENTS_ORDER_EXPLAIN'			=> 'چیدمان نمایش دیدگاه ها را مشخص می کند.',
	'PROFILE_COMMENTS_TITLE'					=> 'افزونه اراسل دیدگاه در پروفایل ها',
	'PROFILE_COMMENTS_TITLE_EXPLAIN'			=> 'افزونه ارسال یدگاه به پروفایل کاربران تالار.',
	'PROFILE_COMMENTS_VERSION'					=> '1.0.0',
	'SUBMIT_SETTINGS'							=> 'ذخیره تغییرات',
	'VERSION'									=> 'نسخه افزونه',
));
            
?>