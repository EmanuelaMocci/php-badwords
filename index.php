<!-- Creare una variabile con un paragrafo di testo a vostra scelta.

Stampare a schermo il paragrafo e la sua lunghezza.

Una parola da censurare viene passata dall'utente tramite parametro GET.

Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) 
tutte le occorrenze della parola da censurare. -->

<?php 
    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ut illo unde, numquam voluptate ipsam placeat earum facere! Eius ipsum ullam possimus quos illo totam ad. Beatae numquam iste earum.';
    $censured = $_GET['word'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h2>Conteggio caratteri: <?php echo strlen($text) ?></h2>
    <p><?php echo $text ?></p>
<hr>
<!-- str_replace(porzioneDaModificare, conCosa, stringa) - -->
    <h2>Conteggio caratteri: <?php echo strlen($text) ?></h2>
    <p><?php echo str_replace($censured, '***', $text) ?></p>
</body>
</html>