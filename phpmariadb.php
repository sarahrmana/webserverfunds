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

    $sql = "select * from fave_games;";
    $result = mysqli_query($conn, $sql);

    foreach ($result as $row) {
        echo "id: " . $row["id"]. " | Name: " . $row["game"]. " " .$row["genre"] . "\n";}
        ?>
</body>
</html>

