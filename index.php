<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.  -->

<?php 
// phpinfo()

$nome= 'Erik';

$stringName= "<h2> Ciao mi chiamo " . $nome . " </h2>";



$nome2 = $_GET["name"];
$stringName= "<h2> Ciao mi chiamo " . $nome2 . " </h2>";
$string2= str_replace($nome2, "***", $stringName);
?>


<h1>Frase Originale:</h1>

<?php echo($string) ?>
<?php echo(strlen($string)) ?>


<h1>Frase Modificata:</h1>

<?php echo($string2) ?>
<?php echo(strlen($string2)) ?>