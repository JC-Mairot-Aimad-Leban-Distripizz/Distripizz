<?php
//fait appel à init.php dans dossier inc (inclusion)
require_once('inc/init.php');
require_once('inc/fonctions.php');
//code php


require_once('inc/header.php');
?>
<!-- div générale pour le contenu de la onepage -->
<div class="container indexBg">

<!-- carousel bootstrap -->
    <div class="container-fluid">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="img/04.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="img/02.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="img/03.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="img/04.jpg" alt="Third slide">
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
<!-- block h1 + p qui somme nous -->
    <div class="whoRyou">
        <h2>Qui somme nous ?</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Fuga autem eius quisquam soluta dolorum, neque doloremque 
            reprehenderit molestias assumenda voluptas pariatur magnam 
            deleniti amet, cupiditate labore suscipit, illo maiores consequatur. 
            Ipsum deserunt ducimus eaque porro reiciendis dolorum tenetur accusamus 
            atque.
        </p>
    </div>
<!-- une image bouteille + pizza possibilité hover annimé-->
<!-- 1div>2div>h2+p -->
<!-- 1 img team -->
<!-- 1div>2div>h2+p -->
<!-- 1div>2div>h2+p+img -->
<!-- formulaire contactez nous avec une ancre de contact du header -->
<!-- img  -->
</div>





<?php 
include('inc/footer.php');
?>