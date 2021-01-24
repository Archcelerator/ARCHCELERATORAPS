<?php
//recupero i valori dai campi del form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

//stabilisco delle variabili aggiuntive per l'invio dell'email
$dati = "From: ".$name;
$dati .= "Reply-to: ".$email;
$dati .= "X-Mailer: PHP/".phpversion();
//invio l'email
mail("archcelerator@gmail.com", "$name", "$email", "$dati");
 if($nome=="") {
        header("Refresh: 5; url=http://zobaz.altervista.org/testing/headerRefresh/");
        echo "Devi inserire il tuo nome.";
    }
    elseif(!ereg("^[a-z0-9][_\.a-z0-9-]+@([a-z0-9][0-9a-z-]+\.)+([a-z]{2,4})",$mail)) {
        header("Refresh: 5; url=http://zobaz.altervista.org/testing/headerRefresh/");
        echo "Devi inserire un formato di e-mail valido per il mittente.";
    }
    elseif ($msg=="") {
        header("Refresh: 5; url=http://zobaz.altervista.org/testing/headerRefresh/");
        echo "Hai dimenticato il messaggio.";
    }
    elseif(mail($mail, "Richiesta informazioni  da $nome", $msg, "From:<$mail>\n")) {
        header("Refresh: 5; url=http://www.zobaz.it");
        echo "Mail inviata con successo, le risponderemo nel pi&ugrave; breve tempo possibile.";
    }
    else {
        header("Refresh: 5; url=http://zobaz.altervista.org/testing/headerRefresh/");
        echo "Si è verificato un errore durante l'invio.";
    }


?>