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
              $sql = "select game, genre, price from fave_games where game='{$game}';";
              $result = mysqli_query($conn, $sql); 
        ?>
    </head>
    <body>
        <h1>Form Submissions</h1>
        You selected <?=$game?><br/>
        <?php
            foreach($result as $row)
            {
                echo "{$row['game']} is a {$row['genre']} game that costs \${$row['price']}.";
            }
        ?>

        <h1>New game information</h1>
        You added <?=htmlspecialchars($_POST['newgame'])?> with a genre of <?=htmlspecialchars($_POST['newgenre'])?> and a price of <?=(int)$_POST['price']?>
        
          <?php
            $sql = "INSERT INTO fave_games (game,genre,price) VALUES ("$newgame", "$newgenre", "$newprice")";
            $result = mysqli_query($conn,$sql);
             mysqli_close($conn); 
          ?>
    </body>
</html>