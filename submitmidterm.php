<!DOCTYPE html>
<html>
    <head>
        <title> Form Submissions </title>
    </head>
    <body>
        <p><?= var_dump($_POST) ?></p>

        <p>Selected item: <?=htmlspecialchars($_POST['item'])?></p>
        <p>Desired quantity: <?=(int)$_POST['quantity']?> </p>
    </body>
</html>