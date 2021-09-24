<!DOCTYPE html>
<html>
    <head>
        <title> What is my user agent </title>
    </head>
    <body>
        <p> Your browser is <?=$_SERVER['HTTP_USER_AGENT']?> </p>
        <p><?= var_dump($_SERVER) ?></p>
    </body>
<html>