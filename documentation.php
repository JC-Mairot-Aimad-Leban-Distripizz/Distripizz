<?php
//fait appel à init.php dans dossier inc (inclusion)
require_once('inc/init.php');

//code php
//recupère et affiche tous les gamùe design
$result = $pdo->query("SELECT * FROM documentations");
$docs = $result->fetchall();

require_once('inc/header.php');
?>

<!-- injection des documentations dans HTML  -->
<?php foreach($docs as $doc): extract($doc)?>
    <div class="document">
        <h2><?= $title ?></h2> 
        <p class="txtDoc"><?= $text ?></p>      
    </div> 
<?php endforeach ?>


<div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner">

        <div class="carousel-item ">
        <img src="img/01.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item active">
        <img src="img/02.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="img/03.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="img/04.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

</div>

<?php 
include('inc/footer.php');
?>