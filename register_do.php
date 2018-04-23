<?php
$output = NULL;
    //connect to database
    include_once 'database.php';

  $mysqli = NEW mysqli ('localhost', 'nogomet', 'B09gR0yCOe5YdEDN', 'nogomet');

  $name = $mysqli->real_escape_string($_POST['name']);
  $surname = $mysqli->real_escape_string($_POST['surname']);
  $email = $mysqli->real_escape_string($_POST['email']);
  $country_id = (int) $_POST['country_id'];
  $team_id = (int) $_POST['team_id'];
  $pass = $mysqli->real_escape_string($_POST['pass']);
  $pass2 = $mysqli->real_escape_string($_POST['pass2']);

  if($pass2 == $pass)
  {
  //geslo pripravimo za vnos
  $pass = $salt.$pass;
  //geslo zakodiramo
  $pass = sha1($pass);

  $query = sprintf("INSERT INTO users(team_id, country_id, name, surname, email, pass) VALUES
                            (".$team_id.", ".$country_id.", '%s','%s','%s','%s')",
                      mysqli_real_escape_string($link, $name),
                      mysqli_real_escape_string($link, $surname),
                      mysqli_real_escape_string($link, $email),
                      mysqli_real_escape_string($link, $pass));

          //preverimo uspešnost
          if (!mysqli_query($link, $query)) {
              //napaka pri vnosu stavka (email)
              header("Location: register.php");
              die();//prekine izvajanje skripte
          }
          //vse je ok, preusmerimo ga na prijavo
          header("Location: login.php");
      }
      else {
          //če je kakšna napaka, naj ga preusmeri nazaj
          header("Location: register.php");
      }
?>
