<?php
	Session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="formulaire.css">
    <title>Site PHP</title>
</head>
<body>
    <?php
    $date = isset($_POST["date"]) ? htmlspecialchars($_POST["date"]) : '';
    $prenom = isset($_POST["prenom"]) ? htmlspecialchars($_POST["prenom"]) : '';
//     header("Location: generate_pdf.php?date=" . urlencode($date));
// exit;
    ?>
<button><a href="index.php">Formulaire</a></button>
    <h1><strong>Contrat de partenariat commercial</strong></h1>
    <div>
        <p>Ce contrat est fait ce jour <?php echo isset($_POST["date"]) ? htmlspecialchars($_POST["date"]) : ''; ?>
        en <?php echo isset($_POST["var"]) ? htmlspecialchars($_POST["var"]) : ''; ?>
        copies originales, entre <?php echo isset($_POST["nom"]) ? htmlspecialchars($_POST["nom"]) : ''; ?> 
        <?php echo isset($_POST["prenom"]) ? htmlspecialchars($_POST["prenom"]) : ''; ?> <?php
define('COMPT_INPUTS', 'compteurInputs');
define('PREFIX_INPUT', 'nouvelInput');

function sanitizeInput($input) {
    return htmlspecialchars($input);
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST[COMPT_INPUTS])) {
    $numInputs = filter_input(INPUT_POST, COMPT_INPUTS, FILTER_VALIDATE_INT);

    if ($numInputs !== false && $numInputs > 0) {
        for ($i = 1; $i <= $numInputs; $i++) {
            $inputName = PREFIX_INPUT . $i;
            if (isset($_POST[$inputName])) {
                $fieldValue = sanitizeInput($_POST[$inputName]);
                // Faire quelque chose avec $fieldValue
                echo "Partenaire $i : $fieldValue      ";
            }
        }
    }
}
    ?>

</p>
    </div>

    
    <div>
        <h2>1. NOM DU PARTENARIAT ET ACTIVITÉ</h2>
        <p>
            <div>1.2 Nom: Les Partenaires cités ci-dessus donnent leur accord, pour que le partenariat
                commercial soit exercé sous le nom: <?php echo isset($_POST["autre"]) ? htmlspecialchars($_POST["autre"]) : ''; ?><br>
            </div>
            1.3 Adresse officielle: Les Partenaires cités ci-dessus donnent leur accord pour que le siège
            du partenariat commercial soit: <?php echo isset($_POST["autre2"]) ? htmlspecialchars($_POST["autre2"]) : ''; ?><br>
            <div>2. TERMES</div>
            2.1 Le partenariat commence le <?php echo isset($_POST["autre3"]) ? htmlspecialchars($_POST["autre3"]) : ''; ?><br> 
            et continue jusqu'à la fin de cet accord.
            <div>3. CONTRIBUTION AU PARTENARIAT</div>
            3.1 La contribution de chaque partenaire au capital listée ci-dessous se compose des éléments
            suivants:
        </p>
    </div>

    <button id="genpdf" type="button">Générer PDF</button>

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        $("#genpdf").click(function() {
            $.ajax({
                type: "POST",
                url: "generate_pdf.php",
                data: {
                    date: "<?php echo isset($_POST["date"]) ? htmlspecialchars($_POST["date"]) : ''; ?>",
                    var: "<?php echo isset($_POST["var"]) ? htmlspecialchars($_POST["var"]) : ''; ?>",
                    nom: "<?php echo isset($_POST["nom"]) ? htmlspecialchars($_POST["nom"]) : ''; ?>",
                    prenom: "<?php echo isset($_POST["prenom"]) ? htmlspecialchars($_POST["prenom"]) : ''; ?>",
                },
                success: function(response) {
                    window.location.href = 'generate_pdf.php';
                }
            });
        });
    });
</script>

</body>
</html>
