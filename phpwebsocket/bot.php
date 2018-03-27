#!/usr/bin/php -q
<?php  

// Execution en ligne de commande : php -q <nomdufichier>.php

// Inclusion de la librairie phpwebsocket
require "websocket.class.php";

echo "Extension websocket";


echo "Connexion BDD ";
// on se connecte à MySQL 
$db = mysqli_connect('localhost','root','','test'); 

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// on crée la requête SQL 
$sql = 'SELECT espece,sexe,nom FROM Animal'; 

// on envoie la requête 
$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 

// on fait une boucle qui va faire un tour pour chaque enregistrement 
while($data = mysqli_fetch_assoc($req)) 
    { 
    // on affiche les informations de l'enregistrement en cours 
    echo '<b>'.$data['nom'].' '.$data['espece'].'</b> ('.$data['sexe'].') ><br>'; 
    } 

    
    

// Extension de WebSocket
class ChatBot extends WebSocket {
  function process($user,$msg) {
    $this->say("< ".$msg);
    switch($msg){
      case "hello":                              
        $this->send($user->socket,"Saluuuuuuuuuuuuuut");
      break;
      case "date":
        $this->send($user->socket,"Nous sommes le ".date("d/m/Y"));
      break;
      case "bye":
      case "ciao":
        $this->send($user->socket,"Au revoir");
        $this->disconnect($user->socket);
      break;
      default:
        $this->send($user->socket,"Pas compris !");
      break;
    }
  }
}


$master = new ChatBot("0.0.0.0",1337);

?>