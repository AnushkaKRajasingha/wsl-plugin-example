<?php
/*
Plugin Name: WooCommerce Software Licence - Plugin Example
Description: WooCommerce Software Licence - Plugin Example
Author: nsp-code
Author URI: http://www.nsp-code.com
Version: 1.0.2
*/
    
    define('WOO_SLT_PATH',   plugin_dir_path(__FILE__));
    define('WOO_SLT_URL',    plugins_url('', __FILE__));
    define('WOO_SLT_APP_API_URL',      'http://diviwm.my/index.php');
    
    define('WOO_SLT_VERSION', '1.0.2');
    define('WOO_SLT_DB_VERSION', '1.0'); 
    
    define('WOO_SLT_PRODUCT_ID',           'Pos_License_01');
    define('WOO_SLT_INSTANCE',             str_replace(array ("https://" , "http://"), "", network_site_url()));
    
   
    include_once(WOO_SLT_PATH . '/include/class.wooslt.php');
    include_once(WOO_SLT_PATH . '/include/class.licence.php');
    include_once(WOO_SLT_PATH . '/include/class.options.php');
    include_once(WOO_SLT_PATH . '/include/class.updater.php');
    
    function WOO_SLT_activated() 
        {

        }

    function WOO_SLT_deactivated() 
        {

        }
    
    global $WOO_SLT;
    $WOO_SLT = new WOO_SLT()

?>