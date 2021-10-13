<!DOCTYPE html>
<html>
 <body>
    <?php
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
    $sql = "select * from fave_games;";
    $result = mysqli_query($conn, $sql);

 //   foreach ($result as $row) {
      //  echo "id: {$row['id']} | Name: {$row['game']} | Genre: {$row["genre"]} | Price: \${$row["price"]} </br>";
   // }
    ?>
    <form action="mariadbresults.php" method=POST>
        <h1>Please select a game to obtain information on it</h1>
        <select name="game">
            <?php
                foreach ($result as $row) echo "<option value='{$row["game"]}'>{$row["game"]}</option>";
                mysqli_close($conn); 
            ?>
        </select>

            <h1>Section to add a new game entry</h1>
                <label for="newgame">Game name:</label>
                <input type="text" id="newgame" name="newgame"/><br>
            <br>
            <p>Please select the genre of the game</p><br>
            <input type="radio" id="rpg" name="newgenre" value="rpg">
            <label for="rpg">RPG</label><br>
            <input type="radio" id="openworld" name="newgenre" value="openworld">
            <label for="openworld">Open World</label><br>
            <input type="radio" id="fps" name="newgenre" value="fps">
            <label for="fps">FPS</label><br>
            <input type="radio" id="sports" name="newgenre" value="sports">
            <label for="sports">Sports</label><br>
            <input type="radio" id="mmo" name="newgenre" value="mmo">
            <label for="mmo">MMO</label><br>
            <input type="radio" id="puzzle" name="newgenre" value="puzzle">
            <label for="puzzle">Puzzle</label><br>
            <input type="radio" id="racing" name="newgenre" value="racing">
            <label for="racing">Racing</label><br>

            <br>
            <label for="newprice">Price (in $): </label>
            <input type="text" id="newprice" name="newprice" pattern="[0-9]+" title="Numbers only"/><br>

            <input type="submit" value="submit"/>
    </form>
</body>
</html>

