<!DOCTYPE html>
<html>
    <head>
        <title> Form Submissions </title>
        <?php
            $game = htmlspecialchars($_POST["game"]);
            $server = "localhost";
            $username = "pi";
            $password = "voidnul1";
            $database = "videogames";
            $conn = mysqli_connect($server, $username, $password, $database);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            echo "Connected successfully";
            echo "<br/>";
              } 
              $sql = "select game, genre from fave_games where game='{$game}';";
              $result = mysqli_query($conn, $sql); 
        ?>
    </head>
    <body>
        <h1>Form Submissions</h1>
        <p>Selected game: <?=htmlspecialchars($_POST['game'])?></p>
        <p>Genre of game: <?htmlspecialchars($_POST['genre'])?></p>
    </body>
</html>