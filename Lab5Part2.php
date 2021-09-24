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
        <p>The amount of hours they play games a week: <?=htmlspecialchars($_POST['hours'])?> </p> >
        <?php if(isset($_POST['rpg'])
            echo "They play RPG games";
        else   
            echo "They do not play RPG games";
        ?>
        <?php if(isset($_POST['openworld'])
            echo "They play open world games";
        else   
            echo "They do not play open world games";
        ?>

    </body>
</html>