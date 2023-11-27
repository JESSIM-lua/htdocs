
// Animation pour le bouton "Ajouter un Partenaire" avec Animate.css
$('#ajouInput').click(function() {
    const submitButton = $('#ajouInput');
    submitButton.addClass('animate__animated animate__rubberBand');

    // Ajoutez un délai pour supprimer la classe d'animation après l'animation
    setTimeout(function() {
        submitButton.removeClass('animate__animated animate__rubberBand');
    }, 1000); // 1000ms = 1 seconde, ajustez si nécessaire
});

// Animation pour le bouton "Générer PDF" avec jQuery
$('#generatePdf').click(function() {
    const submitButton = $('#generatePdf');
    submitButton.addClass('animate__animated animate__rubberBand');

    // Ajoutez un délai pour supprimer la classe d'animation après l'animation
    setTimeout(function() {
        submitButton.removeClass('animate__animated animate__rubberBand');
    }, 1000); // 1000ms = 1 seconde, ajustez si nécessaire
});

$('#sub').click(function() {
    const submitButton = $('#sub');
    submitButton.addClass('animate__animated animate__rubberBand');

    // Ajoutez un délai pour supprimer la classe d'animation après l'animation
    setTimeout(function() {
        submitButton.removeClass('animate__animated animate__rubberBand');
    }, 1000); // 1000ms = 1 seconde, ajustez si nécessaire
});


