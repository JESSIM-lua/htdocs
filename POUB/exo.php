<!DOCTYPE html>
<html lang='fr'>
<head>
    <link rel='stylesheet' href='style.css'>
    <meta charset='UTF-8'>
    <title>TP PHP</title>
</head>
<body>
    
    <?php
    // exercice 1
    echo '<h1>Exercice 1</h1>';
        echo 'coucou <br>';
    // exercice 2
    echo '<h1>Exercice 2</h1>';
        $test = 'c\'est un texte';
        echo $test;

        echo '<br>';
    // exercice 3
    echo '<h1>Exercice 3</h1>';
        $date = '2021';
        var_dump($date);

        echo '<br>';
    // exercice 4   
    echo '<h1>Exercice 4</h1>';

    
        $chaine = strtoupper('majuscule');
        echo $chaine;

        echo '<br>';
    // exercice 5
    echo '<h1>Exercice 5</h1>';

        $var1 = 'variable 1 ';
        $var2 = 'variable 2 ';
        $var3 = 'variable 3 ';

        echo $var1, $var2, $var3;
    // exercice 6
        echo '<h1>Exercice 6</h1>';

        $prenoms = array('Jean', 'Marie', 'Pierre', 'Nicolas', 'Sophie');
        echo 'Prénoms :' . $prenoms[0] . ','. $prenoms[1] . ','. $prenoms[2] . ','. $prenoms[3] . ','. $prenoms[4] . ',';

    // exercice 7
        echo '<h1>Exercice 7</h1>';

        $region= array(
            "region 1"=> 5,
            "region 2"=> 7,
            "region 3"=> 9,
            "region 4"=> 10,
            "region 5"=> 15,
        );
        var_dump($region);

    // exercice 8
    echo '<h1>Exercice 8</h1>';

    $calcul =  1983 * 12 /32;
    echo $calcul;

    // exercice 9
    echo '<h1>Exercice 9</h1>';
    
    $X = 10;
    $Y = 5;
  
    if ($X == $Y) {
      echo "X est égal à Y";
    } else {
      echo "X n'est pas égal à Y";
    }

    $X = 10;
    $Y = 10;
  
    if ($X == $Y) {
      echo "X est égal à Y";
    } else {
      echo "X n'est pas égal à Y";
    }

    ?>
    
</body>
</html>