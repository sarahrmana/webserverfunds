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
        <p>The genres they play: <?=htmlspecialchars($_POST['rpg'])?> </p>
        <p><?htmlspecialchars($_POST['racing'])?></p>
        <p><?htmlspecialchars($_POST['puzzle'])?></p>

    </body>
</html>