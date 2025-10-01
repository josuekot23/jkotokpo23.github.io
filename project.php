<?php 
    declare(strict_types=1);
    $title = "Projets";
    require ("include/header.inc.php");
    require "include/function.inc.php";

?>

<!-- Section Projets -->

<section class="projects">
    <div class="projects-container">
        <h2>Projets </h2>
        <div class="projects-grid">
            <?=afficher_projets("resources/project.txt")?>
        </div>

    </div>
</section>


<?php
    require "./include/footer.inc.php";
?>