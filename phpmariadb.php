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

    foreach ($result as $row) {
        echo "id: {$row['id']} | Name: {$row['game']} | Genre: {$row["genre"]} | Price: \${$row["price"]} </br>";
    }
    ?>
    <form>
        <select name="games">
            <?php
                foreach ($result as $row) echo "<option value='{$row["game"]}'>{$row["game"]}</option>";
            ?>
        </select>
    </form>
</body>
</html>

