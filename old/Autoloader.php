<?php
    spl_autoload_register(function ($class_name){
        if (file_exists('config/classes/'.$class_name.'.Class.php')) {
            require_once 'config/classes/'.$class_name.'.Class.php';
        }else if (file_exists('config/controllers/'.$class_name.'.php')) {
            require_once 'config/controllers/'.$class_name.'.php';
        }
    });
    
?>