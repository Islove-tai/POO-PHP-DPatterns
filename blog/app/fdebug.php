<?php

class d
{
  public static function dd($var)
  {
    echo '<div class="dd">';
      echo '<pre>';
        var_dump($var);
      echo '</pre>';
    echo '</div>';  
  }
}