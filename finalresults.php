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

        ?>
        <?php
        $sql = "INSERT INTO searches (search, ip_address) VALUES ('{$search}', '{$ip_address});";
            $result = mysqli_query($conn,$sql);
           echo "<br/>";
            echo $result ? "Success!" : "Failure: " . mysqli_error($conn);
            mysqli_close($conn); 
         //   header('Location: https://google.ca');
          ?>
    </head>
</html>