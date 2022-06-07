<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$prova = "Prova prova prova";
$prova_get = $_GET['prova'];
?>
<h2>Stampare a schermo il paragrafo e la sua lunghezza.</h2>
<p>
    <?php
    echo "Stringa: " . $prova ;
    ?>
</p>
<p?>
    <?php
    $prova_lunghezza = strlen($prova);
    echo "Lunghezz stringa: " . $prova_lunghezza ;
    ?>
</p>
<h2>Una parola da censurare viene passata dall'utente tramite parametro GET</h2>
<p>
    <?php 
    $prova_replace = str_replace($prova_get,"",$prova);
    echo "Censura stringa " . $prova_replace;
    ?>
</p>
<h2>Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.</h2>
<p>
    <?php 
    $prova_replace = str_replace($prova_get,"***",$prova);
    echo "Stringa dopo aver sostituito con tre asterischi tutte le occorrenze della parola da censurare: " . $prova_replace;
    ?>
</p>
<p>
    <?php 
    $prova_lunghezza = strlen($prova_replace);
    echo "Lunghezz stringa dopo aver sostituito con tre asterischi tutte le occorrenze della parola da censurare: " . $prova_lunghezza;
    ?>
</p>
</body>
</html>