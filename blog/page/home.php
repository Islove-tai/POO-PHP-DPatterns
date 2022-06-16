<?php $title = "Home"; ?>

<div class="col-sm-8">  
<?php foreach ((App\Table\Article::getLast()) as $post): ?>


    <!-- Post title-->
    <h3 class="fw-bolder mb-1"> <?= $post->titre; ?> </h3>
    <!-- Post categories-->
    <a class="badge bg-secondary text-decoration-none link-light"> <?= $post->categorie; ?> </a>

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





































<?php

use App\App;
use App\Table\Article;
//$res = $pdo -> query('SELECT * FROM `articles`');

// $count = $pdo -> exec("INSERT INTO `articles`(`titre`, `contenu`, `date`) VALUES ('Le 4e titre','Le 4e contenu probablement Lorem,saepe','2022-05-26 10:40:00')");

//$data = $res -> fetchAll(\PDO::FETCH_OBJ);





function dd($var){
  echo '<div style="background-color:#dee2e6; border-radius:3px; padding: 2px 10px 0px 10px; border:1px solid #dee2ff; margin-bottom: 20px">';
    echo "<pre>";
      print_r($var);
    echo "</pre>";
  echo '</div>';  
}
?>