<?php
  // name of the file that we store data to
  // we want to use this information in different files 
  $filename = "file.txt";

   // DB configuration
  $db_host = "localhost";
  $db_user = "root";
  $db_password = "";
  $db_name = "i218_phrases";
  $link = mysqli_connect($db_host, $db_user, $db_password, $db_name);  

// switch that to true if you want to do the mailing stuff...
$mailfun = false;

 if ($mailfun == true){
      // email related stuff...
      if (isset($_GET['email'])){
          // ....
      }
    }
?>
    <?php
        if ($mailfun == true){
        ?>
        <div class="form-group">
            <label for="email">Send this message to:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
        </div>    
        <?php    
        }
        ?>


