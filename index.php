
<?php 
    // 1) Creare una variabile con un paragrafo di testo a vostra scelta.
    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ut illo unde, numquam voluptate ipsam placeat earum facere! Eius ipsum ullam possimus quos illo totam ad. Beatae numquam iste earum.';
    
    // 3) Una parola da censurare viene passata dall'utente tramite parametro GET.
    $censured = $_GET['word'];

    // 4) Sostituire con tre *** la parola da censurare
    // str_replace(porzioneDaModificare, conCosa, stringa)
    $text2 = str_replace($censured, '***', $text);
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
    <div>
        <form action="">
            <input name="word" type="text" placeholder="Inserisci una parola">
            <input type="submit" value="Invia">
        </form>
    </div>
    <!-- 2) Stampare a schermo il paragrafo e la sua lunghezza. -->
    <h2>Conteggio caratteri: <?php echo strlen($text); ?></h2>
    <p><?php echo $text; ?></p>
<hr>
    <!-- 5) Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
    <h2>Conteggio caratteri: <?php echo strlen($text2); ?></h2>
    <p><?php echo $text2; ?></p>
</body>
</html>