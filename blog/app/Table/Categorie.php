<?php

namespace App\Table;

use App\Table\Table;




class Categorie extends Table
{

  protected static $table = 'categories';

    /**
   * Undocumented function
   *
   * @return string
   */
  public function getUrl(): string
  {
    return 'index.php?p=categorie&id='. $this->id;
  }







}