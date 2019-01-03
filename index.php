<?php
$text = urldecode($_REQUEST['Unfug_0']) . " " . urldecode($_REQUEST['Unfug_1']) . " " . urldecode($_REQUEST['Unfug_2']) . "\n";
  file_put_contents("text.txt", $text, FILE_APPEND); 

  if (empty($_GET['textfeld'])){
  	die("Ist das alles?!");
}
  	else {
  		file_put_contents("text.txt", $_GET['textfeld'], FILE_APPEND);
  	}
  
?>

<!-- urldecode — Dekodiert eine URL-kodierte Zeichenkette
-->

<!-- PHP stellt dazu die Arrays $_GET (alle per GET übertragenen
Daten), $_POST (alle per POST übertragenen Daten) und
$_REQUEST (alle übertragenen Daten) zur Verfügung. 
-->

<!-- file_put_contents($filename, $text, FILE_APPEND)
Schreibt $text in die Datei $filename. Wenn die Datei nicht
existiert, wird sie angelegt. FILE_APPEND sorgt dafür, dass der
Inhalt an die Datei gehängt und nicht nur der alte Inhalt
überschrieben wird. 
-->

<!DOCTYPE HTML>
<html lang="DE"> <!--Angabe, dass deutsche Sprache -->

<body>

	<?php
	echo $_GET ['Begrüßung'];
	?>
	&#160;
	<?php
	echo $_GET ['Name'];
	?>
	, you said yes to 
	<?php
	echo $_GET ['Unfug_0'];
	?> 
	,
	<?php
	echo $_GET ['Unfug_1'];
	?>
	,
	<?php
	echo $_GET ['Unfug_2'];
	?>
	&
<?php
	echo $_GET ['textfeld'];
	?>
	!

</body>
</html>