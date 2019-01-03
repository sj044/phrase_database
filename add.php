<!DOCTYPE html>
<html lang="DE">
<head>
	<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"></link>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="style.css"></link>

    <!-- Custom JS -->
   </head>
<body>

<?php

include('config.php');
?>
<?php

  if(isset($_GET['btn-save'])){
    // here, we will put the save-operations...
    // but we can just output some stuff that was sent to our page...
     $filename = "file.txt";
    $text = $_GET['Unfug_0'] . " " . $_GET['Unfug_1'] . " " . $_GET['Unfug_2'] . " " . $_GET['textfeld'];
    file_put_contents($filename, $text);

echo $_GET['Unfug_0']  . " " . $_GET['Unfug_1'] . " " . $_GET ['Unfug_2'] . " " . $_GET ['textfeld'];
  }

 ?>



<?php

include('header.inc');
	include('nav.inc');
?>

    <main role="main"> 
    	<!-- Das main-Element enthält den (Haupt-)Inhalt einer Webseite; Durch die Auszeichnung des Hauptinhalts der Seite mit "main" können Screenreader und andere alternative Ausgabegeräte diesen erkennen und beispielsweise Header oder Navigation überspringen -->
<div class="main">

<form action="index.php" method="get">
<br>
<div class="begruessung">
	<style>
	.begruessung {color: blue;

    margin-left: 20px;
}
</style>
	


 Name: <input type = „text“ name="Name"><br>
 <br>
 <div class="begruessung_auswahl">
 <select name="Begrüßung">
     <option value="Guten Morgen">Guten Morgen</option>
     <option value="Mahlzeit">Mahlzeit</option>
     <option value="Guten Abend">Guten Abend</option>
     <option value="Gute Nacht">Gute Nacht</option>
</select>
<style>
.begruessung_auswahl  {float:left;
    margin-left: 50px;
}
</style>
</div>
</div>

<br>
<br>
<div class="container"> <!-- rückt  Essensauswahl als Container weiter nach rechts-->
	<style>
	.container {color: green;
	}
</style>
<h1>I Say YES! to ...</h1>

<form method="get">
 <!-- form content goes here -->

<select name="Unfug_0">
     <option value=" Burger"> Burger</option>
     <option value=" Hot Dog"> Hot Dog</option>
     <option value=" Spaghetti"> Spaghetti</option>
     <option value=" Donuts"> Donuts</option>
</select>
<select name="Unfug_1">
     <option value="Brokolli "> Brokolli </option>
     <option value="Möhre "> Möhre </option>
     <option value="Staudensellerie "> Staudensellerie </option>
     <option value="Böhnchen "> Böhnchen </option>
</select>
<select name="Unfug_2">
     <option value=" Cola "> Cola </option>
     <option value=" Milch "> Milch </option>
     <option value=" Wodka "> Wodka </option>
     <option value=" O-Saft "> O-Saft </option>
</select>


<br>
<br>

 <button type = "submit" class="btn btn-default" name="btn-save" value="1">Say YES!</button>
</div>

<div class= "textfeld">
    <textarea name="textfeld" rows="7" cols="50" placeholder="Sonst noch einen Wunsch?"></textarea>

     </div>

     </form>
</main>

<?php
include 'footer.inc';
?>
<?php
    if (isset($_GET['email'])){
      $to      = urldecode($_GET['email']);
      $subject = 'I say YES! to...';
      $message = $text;
      $headers = 'From: internet2@hdmy.de' . "\r\n" .
          'Reply-To: internet2@hdmy.de' . "\r\n" .
          'X-Mailer: PHP/' . phpversion();

      $mailSuccess = mail($to, $subject, $message, $headers);      

      /*
      // if you want to do some rudimentary error handling...   
      if (!$mailSuccess){
        echo "mail not sent";
      }
      else {
        echo "mail sent to: " . $to;
      }
      */
    }
?>
<?php
if (!isset($_GET['password']) || $_GET['password'] != "GEHEIM"){
  die("Passwort incorrect");
}
?>
</body>
</html>
