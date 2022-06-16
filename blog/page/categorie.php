<?php
$title = 'Categories';

$categorie = App\Table\Categorie::find($_GET['id']);
if($categorie === false){
  App\App::notFound();
}

$articles = App\Table\Article::lastByCategory($_GET['id']);

$categorieListe = App\Table\Categorie::all();


/*
foreach ($categorieListe as $itemCategorie) {
  echo $itemCategorie->titre;
  foreach ($articles as $itemArticle) {
    echo $itemArticle.PHP_EOL;
  }
  // var_dump($article);
}
*/

?>


<div class="col-sm-8">  

  <!-- Post category -->
  <h3 class="mb-5"> <?= 'Listes des articles de la catégorie :  <strong> '.$categorie->titre; ?> </strong> </h3>

<?php foreach ($articles as $post): ?>
    <!-- Post title-->
    <h3 class="fw-bolder mb-1"> <?= $post->titre; ?> </h3>

    <!-- Post content-->
    <p class="fs-5"> <?= $post->Extrait; ?> </p>


<?php endforeach; ?>

</div>
<div class="col-sm-4">
    <h3 class=""> <?= 'Liste des catégories'; ?> </h3>

    <ul>
      <?php foreach((App\Table\Categorie::all()) as $categorie): ?>
        
        <p> <a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?> </a></p>

      <?php endforeach; ?>
    </ul>

</div>

