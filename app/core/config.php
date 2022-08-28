<?php

    define("WEBSITE_TITLE",'MY SHOP');

    //Database
    define('DB_NAME',"ecom");
    define('DB_USER',"root");
    define('DB_PASS',"");

    define('THEME',"eshop/");

    define('DEBUG',true);

    if (DEBUG) {
        ini_set('display_errors',1);
    }else{
        ini_set('display_errors',0);
    }

?>