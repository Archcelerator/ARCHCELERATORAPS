<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$delay = "4"
$url = "http://archcelerator.altervista.org"

elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {echo 'Inserisci un indirizzo email valido'; }else{
	
	$testo = "Nome:" . $name . "\n"
	."Email:" . $email . "\n"
	. "Messaggio:" . $message . "\n"

mail('archcelerator@gmail.com', 'Mail da Archcelerator APS', $testo);

print "<body>
<table align='center' bordercolor='#CCCCCC'>
<tr>

<td>

<div align='center'><font face='Verdana, Arial, Helvetica, sans-serif'>
Grazie per aver compilato il form</font><br><br>
Per tornare alla Home attendi 4 secondi o <a href=http://archcelerator.altervista.org'>Clicca Qui</a></font></div></td>
<meta http-equiv='refresh' content='$delay; url=$url'>
</tr>
</table>
</body>
}
?>

