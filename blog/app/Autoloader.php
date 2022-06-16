<?php
namespace App;

class Autoloader{

    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    static function autoload($class){
        $class = str_replace(__NAMESPACE__.'\\', '', $class); // __NAMESPACE__ = Tutoriel\
        require __DIR__ . DIRECTORY_SEPARATOR . $class . '.php';
    }


}