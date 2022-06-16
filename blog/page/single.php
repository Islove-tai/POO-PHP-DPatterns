<?php

use App\App;
use App\Table\Article;
use App\Table\Categorie;



$post = Article::find($_GET['id']);
if($post === false){
  App::notFound();
}
$categorie = Categorie::find($post->categorie_id);

App::setTitle($post->titre.'🤣');

?>

<h3><?= $post->titre; ?></h3>
<p><em><?= $categorie->titre; ?></em></p>

<p> <?= $post->contenu; ?> </p>


<!-- Une autre methode pour afficher les articles UNIQUE la mienne -->
<!-- 
$post = (Article::getSingle());
?>

<h4> peco $post->titre; pc </h4>
<p> peco $post->contenu; pc </p> -->
