<?php

namespace App\Table;
use App\App;

class Table {
  
  protected static $table;

  /* Ne plus vraiment utile carFactory la resolution static à la volet ne taf pas normale
  private static function getTable()  {
    if(static::$table === null){
      $class_name = explode('\\', get_called_class());
      static::$table = strtolower(end($class_name)).'s';
      // static::$table = strtolower($class_name[array_key_last($class_name)]).'s';
      // die(static::$table);
    }
    // die(static::$table); //permet de vérifier si la vraie classe enfant est appelée
    return static::$table;
  }*/

  public static function query( $statement, $attributes = null, $one = false )  {
    if($attributes){
      return (App::getDb())->prepare($statement, $attributes, get_called_class(), $one);
    }else{
      return (App::getDb())->query($statement, get_called_class(), $one);      
    }
  }


  public static function find($id)  {
    return (App::getDb())->prepare("
    SELECT * 
    FROM  ". static::$table ."
    WHERE id = ?
    ", [$id], get_called_class(), true);
  }


  public static function all()  {
    return (App::getDb())->query("
    SELECT * 
    FROM  ". static::$table ."
    ", get_called_class());
  }
  

  /**
   * methode magique qui trouve tous seul la méthode 
   * de la class appelée en raccorci
   *
   * @param [type] $key
   * @return void
   */
  public function __get($key)  {
    //print_r($key); affiche extrait => getExtrait() et Url => getUrl()
    $method = 'get'. ucfirst($key);
    $this->$key = $this->$method(); //onstocke en instance pour éviter de l'appele à chaque fois
    return $this->$key; //on retourne l'instance
  }




}