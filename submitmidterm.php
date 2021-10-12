<!DOCTYPE html>
<html>
    <head>
        <title> Form Submissions </title>
    </head>
    <body>
        <h1>Form Submissions</h1>
        <p>Selected item: <?=htmlspecialchars($_POST['item'])?></p>
        <p>Desired quantity: <?=(int)$_POST['quantity']?> </p>
    </body>
</html>