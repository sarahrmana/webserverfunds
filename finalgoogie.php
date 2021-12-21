<!DOCTYPE html>
<html>
 <body>
    <?php
    $server = "localhost";
    $username = "pi";
    $password = "voidnul1";
    $database = "final";
    $conn = mysqli_connect($server, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    echo "<br/>";
    $sql = "select * from searches;";
    $result = mysqli_query($conn, $sql);
    "address" = $_SERVER['REMOTE_ADDR']
    ?>
     <form action="finalresults.php" method=POST>
     <h1>Google Search</h1>
                <label for="search">Search:</label>
                <input type="text" id="search" name="search"/><br>
            <br>
            <input type="submit" value="submit"/>
        </form>
</body>
</html>