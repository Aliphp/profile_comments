<?php
/** 
*
* @package profilecommetns
* @version 1.0.0
* @copyright (c) 2013 Ali@php (Ali Faraji - http://www.phpbbpersian.com)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
                            
/**
* @package module_install
*/
class acp_profile_comments_info
{
    function module()
    { 
    return array(
        'filename'    => 'acp_profile_comments',
        'title'        => 'ACP_PROFILE_COMMENTS',
        'version'    => '1.0.0',
        'modes'        => array(
            'settings'        => array('title' => 'ACP_PROFILE_COMMENTS', 'auth' => 'acl_a_modules', 'cat' => array('ACP_CAT_DOT_MODS')),

            ),
        );
        
    }
                            
    function install()
    {
    }
                                
    function uninstall()
    {
    }

}
?>