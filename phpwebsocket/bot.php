#!/usr/bin/php -q



<html>
    <head><title>Weather Report of <?php echo $_GET['q']; ?> - HackerRahul.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    </head>
    <style>
        html, body, h1, h2, h3, h4, h5, h6 {
            font-family: "Comic Sans MS", cursive, sans-serif;
        }
    </style>
    <body> 




        <?php
// Execution en ligne de commande : php -q <nomdufichier>.php
// Inclusion de la librairie phpwebsocket
        require "websocket.class.php";

        function apiOpen($donneeSouhaite, $jour) {
            error_reporting(0);
            
            $numJour = $jour/8;
            
            $get = json_decode(file_get_contents('http://ip-api.com/json/'), true);
            date_default_timezone_set($get['timezone']);

            //     $city = $_GET['q'];
            $string = "http://api.openweathermap.org/data/2.5/forecast?q=Toulouse,FR&units=metric&appid=51213c0a2994097d71c513eed56fc537";
            $data = json_decode(file_get_contents($string), true);

            $icon = $data['list'][$jour]['weather'][0]['icon'];
            $visibility = $data['visibility'];
            $visibilitykm = $visibility / 1000;
            $country = "<h1 class='w3-xxxlarge w3-animate-zoom'><b>" . $data['name'] . "," . $data['sys']['country'] . "</h1></b>";

            $logo = "<center><img src='http://openweathermap.org/img/w/" . $icon . ".png'></center>";
            $desc = "<b><p>" . $data['list'][$jour]['weather'][0]['description'] . "</p></b>";

            $temperature = "<b>Température jour +" . $numJour . " :" . $data['list'][$jour]['main']['temp'] . "°C</b><br>";
            $clouds = "<b>Nuages:" . $data['list'][$jour]['clouds']['all'] . "%</b><br>";
            $humidity = "<b>Humidité:" . $data['list'][$jour]['main']['humidity'] . "%</b><br>";
            $windspeed = "<b>Vitesse du vent :" . $data['list'][$jour]['wind']['speed'] . "m/s</b><br>";
            $pressure = "<b>Pression :" . $data['list'][$jour]['main']['pressure'] . "hpa</b><br>";
            $visibility = "<b>Visibility:" . $visibilitykm . "Km</b><br>";
            $sunrise = "<b>Heure du lever de soleil:" . date('h:i A', $data['list'][$jour]['sys']['sunrise']) . "</b><br>";
            $sunset = "<b>Heure du coucher de soleil:" . date('h:i A', $data['list'][$jour]['sys']['sunset']) . "</b>";

            switch ($donneeSouhaite) {
                case "1":
                    return $temperature;
                    break;
                case "2":
                    return $clouds;
                    break;
                case "3":
                    return $humidity;
                    break;
                case "4":
                    return $windspeed;
                    break;
                case "5":
                    return $humidity;
                    break;
                case "6":
                    return $sunrise;
                    break;
                case "7":
                    return $sunset;
                    break;
                default:
                    return "Erreur de retour";
                    break;
            }
        }

        echo "Extension websocket";

        function bddTest($user, $numComp) {
            echo "Connexion BDD ";
// on se connecte à MySQL 
            $db = mysqli_connect('localhost', 'root', '', 'websocketbdd');

// Check connection
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

// on crée la requête SQL 
            $sql = 'SELECT competence FROM competences';
// on envoie la requête 
            $req = mysqli_query($db, $sql) or die('Erreur SQL !<br>' . $sql . '<br>' . mysql_error());

// on fait une boucle qui va faire un tour pour chaque enregistrement 

            mysqli_fetch_assoc($req);

            while ($data = mysqli_fetch_assoc($req)) {
                // on affiche les informations de l'enregistrement en cours 
                echo '<b>' . $data['competence'] . '</b><br>';
                $this->send($user->socket, $data['competence']);
            }
        }

// Extension de WebSocket
        class ChatBot extends WebSocket {

            function process($user, $msg) {
                $this->say("< " . $msg);
                switch ($msg) {
                    case "hello":
                        $this->send($user->socket, "Saluuuuut");
// $this->send($user->socket,bddTest($user));
                        break;
                    case "temp":
                        for ($i = 8; $i < 39; $i = $i + 8) {
                            $this->send($user->socket, apiOpen("1", $i));
                        }
                        break;
                    case "date":
                        $this->send($user->socket, "Nous sommes le " . date("d/m/Y"));
                        break;
                    case "bye":
                    case "ciao":
                        $this->send($user->socket, "Au revoir");
                        $this->disconnect($user->socket);
                        break;
                    default:
                        $this->send($user->socket, "Pas compris !");
                        break;
                }
            }

        }

        $master = new ChatBot("0.0.0.0", 1337);
        ?>


    </div>
</body>
</html>