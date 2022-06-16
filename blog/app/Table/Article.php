<?php
namespace App\Table;

use App\App;
use App\Table\Table;



class Article extends Table {

  protected static $table = 'articles';


  public static function getSingle()  {
    return (App::getDb())->prepare(
      'SELECT * FROM `articles` WHERE id= ?',
      [($_GET["id"])],
      __CLASS__, true);
  }

  
  public static function getLast()  {
    return self::query(
      'SELECT articles.id, categories.id as categories_id, articles.titre, articles.contenu, categories.titre as categorie
      FROM articles
      LEFT JOIN categories
        ON categories.id = categorie_id'
    );
  }


  public static function lastByCategory($categorie_id)  {
    return self::query('SELECT articles.id, categories.id as categories_id, articles.titre, articles.contenu, categories.titre as categorie
      FROM articles
      LEFT JOIN categories
        ON categories.id = categorie_id
      WHERE categorie_id = ?', [$categorie_id]
    );  
  }


  /**
   * Undocumented function
   *
   * @return string
   */
  public function getUrl(): string  {
    return 'index.php?p=article&id='. $this->id;
  }
  
  /**
   * Undocumented function
   *
   * @return string
   */
  public function getExtrait(): string  {
    $htmlExtrait = '<p>'. substr($this->contenu, 0, 200) .'</p>';
    $htmlExtrait .= "<p><a href=". $this->getUrl() .">Voir la suite...</a></p>";
    return $htmlExtrait;
      
  }


  
}