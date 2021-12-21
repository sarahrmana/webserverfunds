<!DOCTYPE html>
<html>
    <head>
        <title> Form Submissions </title>
        <?php
            $search = htmlspecialchars($_POST["search"]);
            $ip_address = htmlspecialchars($_POST["$_SERVER"]);
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
              $sql = "select search, ip_address from searches where search='{$search}';";
              $result = mysqli_query($conn, $sql); 
        ?>
        <?php
        $sql = "INSERT INTO searches (search, ip_address) VALUES ('{$search}', '{$ip_address});";
            $result = mysqli_query($conn,$sql);
           echo "<br/>";
            echo $result ? "Success!" : "Failure: " . mysqli_error($conn);
            mysqli_close($conn); 
          ?>
    </head>
</html>