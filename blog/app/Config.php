<?php

namespace App;

class Config  {

  private $settings = [];
  private static $_instance;


	public static function getInstance()
	{
		if(is_null(self::$_instance)){
			self::$_instance = new Config();
		}
		return self::$_instance;
	}

  public function __construct()
  {
    $this->settings = require dirname(__DIR__) . DIRECTORY_SEPARATOR .'config' . DIRECTORY_SEPARATOR . 'config.php';
  }
	
  public function get($key)
  {
  	if(!isset($key)){
  		return null;
	}
  	return $this->settings[$key];
  }
  



}