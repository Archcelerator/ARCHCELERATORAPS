<?php

// L'INDIRIZZO DEL DESTINATARIO DELLA MAIL
$to = "archcelerator@gmail.com";

// IL SOGGETTO DELLA MAIL
$subject = "Modulo proveniente dal sito www.miosito.it";

// COSTRUIAMO IL CORPO DEL MESSAGGIO
$body = "Contenuto del modulo:\n\n";
$body .= "Nome: " . trim(stripslashes($_POST["Nome"])) . "\n";
$body .= "Età: " . trim(stripslashes($_POST["Anni"])) . "\n";
$body .= "Città: " . trim(stripslashes($_POST["City"])) . "\n";
$body .= "Indirizzo: " . trim(stripslashes($_POST["Indirizzo"])) . "\n";
$body .= "Note: " . trim(stripslashes($_POST["Note"])) . "\n";

// INTESTAZIONI SUPPLEMENTARI
$headers = "From: Modulo utenti<modulo@sito.it>";

// INVIO DELLA MAIL
if(@mail($to, $subject, $body, $headers)) { // SE L'INOLTRO È ANDATO A BUON FINE...

echo "La mail è stata inoltrata con successo.";

} else {// ALTRIMENTI...

echo "Si sono verificati dei problemi nell'invio della mail.";

}

?>