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
    $_SERVER['REMOTE_ADDR']
    ?>
     <form action="finalresults.php" method=POST>
     <h1>Google Search</h1>
                <label for="search">Search:</label>
                <input type="text" id="search" name="search"/><br>
            <br>
            <select name="search">
            <?php
                foreach ($result as $row) echo "<option value='{$row["search"]}'>{$row["search"]}</option>";
                mysqli_close($conn); 
            ?>
        </select>
            <input type="submit" value="submit"/>
        </form>
</body>
</html>