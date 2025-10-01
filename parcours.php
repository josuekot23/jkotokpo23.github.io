<?php 
    declare(strict_types=1);
    $title = "Parcours";
    require ("include/header.inc.php");
?>


<div class="container">

    <section>
        <h2>Parcours scolaire</h2>
        <div class="parcours-container">
            <div class="box-parcours">
                <h3>Première année Licence</h3>
                <p><strong>Établissement :</strong> Université Polytechnique Haut-De-France (UPHF)</p>
                <p><strong>Année :</strong> 2021 - 2022</p>
                <p><strong>Description :</strong> Math Physique Informatique et Ingénierie (MIPI)</p>
            </div>
            <div class="box-parcours">
                <h3>Licence Informatique : L2 & L3</h3>
                <p><strong>Université :</strong> CYU Paris Cergy Université</p>
                <p><strong>Année :</strong> 2022 - 2024</p>
                <p><strong>Description :</strong> Informatique</p>
            </div>
            <div class="box-parcours">
                <h3>Master Intélligence Embarquée</h3>
                <p><strong>Université :</strong> CYU Paris Cergy Université</p>
                <p><strong>Année :</strong> 2024 - 2026</p>
                <p><strong>Description :</strong> Systèmes embarqués et Intélligence artificielle</p>
            </div>
        </div>
    </section>

    <section>
        <h2>Expériences professionnelles notables</h2>
        <div class="exp-container">
            <div class="box-exp">
                <h3>Ingénieur R&D informatique en apprentissage</h3>
                <h4>Agence Nationale des Fréquences (ANFR) - 2024 à 2026</h4>
                <p>
  Cette expérience a conduit au développement de solutions innovantes répondant à des problématiques internes spécifiques. 
  Compte tenu de l’absence quasi totale de solutions existantes, un travail approfondi de recherche, d’expérimentation et de tests 
  a été mené afin de concevoir des approches adaptées et fiables.
</p>

<p>J’ai travaillé sur deux projets principaux :</p>

<ul style="margin-left: 20px;">
  <li>
    <strong>Conception et développement de systèmes embarqués (sondes)</strong> destinés à surveiller les ondes radio à l’échelle nationale 
    et à analyser leur impact sur les antennes TNT. 
    <br>
    ➝ Conception, développement et prototypage complet, en utilisant des <em>Raspberry Pi 4</em> avec <em>C/C++</em> et <em>Python</em>.
  </li>
  
  <li>
    <strong>Prévisions de phénomènes radio</strong> susceptibles de détériorer les émissions des antennes TNT, 
    en mettant en place des approches de modélisation et d’analyse prédictive.
  </li>
</ul>

            </div>
            <div class="box-exp">
                <h3>Stagiaire Développeur IA</h3>
                <h4>Orano - Été 2024</h4>
        <p>
  Stage de 4 mois au sein du département Data Science, consacré à la conception et au développement d’outils de simulation incendie appliqués aux centrales nucléaires.
</p>

<p>Le projet a inclus :</p>

<ul style="margin-left: 25px;">
  <li>Analyse des besoins et modélisation de scénarios d’incendie</li>
  <li>Optimisation et amélioration des solutions existantes afin d’accroître la fiabilité et la précision des <em>simulations</em></li>
  <li>Développement de nouvelles fonctionnalités (features) destinées aux simulations</li>
  <li>Création de profils de feux conformes aux recommandations internationales</li>
  <li>Utilisation d’un environnement technique principalement basé sur <em>Python</em>, avec adaptation rapide aux principes de <em>sciences physiques</em> nécessaires à la <em>modélisation</em></li>
</ul>

            </div>
            
        </div>
    </section>

</div>


<?php
    require "./include/footer.inc.php";
?>