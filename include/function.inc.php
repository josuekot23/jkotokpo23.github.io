<?php

    function afficher_projets($fichier) {
    if (!file_exists($fichier)) {
        echo "<p>Aucun projet trouvé.</p>";
        return;
    }

    $lines = file($fichier, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    echo '<div class="projects-grid">';
    foreach ($lines as $line) {
        list($nom, $images_str, $description, $type, $module, $role, $niveau, $annee, $skills) = explode("|", $line);

        // Séparer les images
        $images = explode(",", $images_str);

        echo '<div class="project-card">';

        // Carousel pour les images
        echo '<div class="project-image-carousel">';
        foreach ($images as $img) {
            echo '<img src="' . htmlspecialchars($img) . '" alt="' . htmlspecialchars($nom) . '">';
        }
        echo '</div>'; // fin carousel

        // Contenu texte
        echo '<div class="project-content">
                <h3>' . htmlspecialchars($nom) . '</h3>
                <p style="text-align: left;">' . htmlspecialchars($description) . '</p>
                <p style="text-align: left;"> <b>Contexte : </b>  ' . htmlspecialchars($type) . '</p>
                <p style="text-align: left;"> <b>Rôle :</b> ' . htmlspecialchars($role) . '</p>
                <p style="text-align: left;"> <b>Outils :</b> ' . htmlspecialchars($skills) . '</p>
                <p style="text-align: left;"> <b>Module :</b> ' . htmlspecialchars($module) . '</p>
                <p style="text-align: left;"> <b>Niveau :</b> ' . htmlspecialchars($niveau) . '</p>
                <p style="text-align: left;"> <b>Année :</b> ' . htmlspecialchars($annee) . '</p>
              </div>';

        echo '</div>'; // fin project-card
    }
    echo '</div>'; // fin projects-grid
}

?>
