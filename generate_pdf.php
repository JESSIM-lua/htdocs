<?php
// Vérification si la date est reçue en tant que paramètre GET
    // Inclusion de la bibliothèque TCPDF
    require_once('tcpdf/tcpdf.php');

    // Récupération de la date depuis le paramètre GET
    $date = htmlspecialchars($_GET["date"]);
    // $prenom = htmlspecialchars($_GET["var"]);

    // Création d'une nouvelle instance TCPDF
    $pdf = new TCPDF();

    // Création d'une page PDF
    $pdf->AddPage();

    // Contenu HTML à ajouter au PDF avec la date récupérée
    $html = '<p>Ce contrat est fait ce jour ' . $date . ' en </p>';

    // Ajout du contenu HTML au PDF
    $pdf->writeHTML($html, true, false, true, false, '');

    // Nom du fichier PDF (facultatif)
    $nom_fichier = 'document.pdf';

    // Sortie du PDF en téléchargement dans le navigateur
    $pdf->Output($nom_fichier, 'D');
?>
