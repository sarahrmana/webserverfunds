<!DOCTYPE html>
<html>
    <head>
        <title> Form Submissions </title>
    </head>
    <body>
        <p><?= var_dump($_GET) ?></p>
        <p><?= var_dump($_POST) ?></p>

        <p>Name of user: <?=htmlspecialchars($_POST['fname']) . " " . htmlspecialchars($_POST['lname'])?></p>
        <p>Age of user: <?=(int)$_POST['age']?> </p>
        <p>The amount of hours they play games a week: <?=htmlspecialchars($_POST['hours'])?> </p>
        <?php if(isset($_POST['rpg']))
            echo "They play RPG games";
        else   
            echo "They do not play RPG games"; 
        ?>
        <br>
        <?php if(isset($_POST['openworld']))
            echo "They play open world games";
        else   
            echo "They do not play open world games";
        ?>
        <br>
        <?php if(isset($_POST['fps']))
            echo "They play FPS games";
        else   
            echo "They do not play FPS games";
        ?>
        <br>
        <?php if(isset($_POST['sports']))
            echo "They play sport games";
        else   
            echo "They do not play sport games";
        ?>
        <br>
        <?php if(isset($_POST['mmo']))
            echo "They play mmo games";
        else   
            echo "They do not play mmo games";
        ?>
        <br>
        <?php if(isset($_POST['puzzle']))
            echo "They play puzzle games";
        else   
            echo "They do not play puzzle games";
        ?>
        <br>
        <?php if(isset($_POST['racing']))
            echo "They play racing games";
        else   
            echo "They do not play racing games";
        ?>
        <br>

        <p>Their favourite console is: <?=htmlspecialchars($_POST['console'])?></p>
        <h1>Control the LED with GPIO</h1>
            <form method = "GEt" action= "Lab5Part2.php">
                <input type="submit" value="OFF" name="off">
                <input type="submit" value="ON" name="on">
            </form>
        <?php
            shell_exec("gpio -g mode 28 out");
            if(isset($_GET['off']))
            {
                echo "LED is off";
                shell_exec("gpio -g write 28 0");
            }
                elseif(isset($_GET['on']))
            {
                echo "LED is on";
                shell_exec("gpio -g write 28 1");
            }
        ?>
    </body>
</html>