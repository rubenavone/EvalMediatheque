<?php
$img = 0;
if(isset($_GET['id'])){
    $img = $_GET['id'];
}


//connexion bdd
$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');

?>

<main>
    <section class="one-product">
        <article>
            <figure>
            <img src="img/<?=$img?>.jpg" alt="">
            <figcaption> 

            </figcaption>
            </figure>
        </article>
    </section>
</main>