<!DOCTYPE html>
<html>
    <head>
        <title> Form Submissions </title>
    </head>
    <body>
        <h1>Form Submissions</h1>
        <p>Selected game: <?=htmlspecialchars($_POST['game'])?></p>
        <p>Genre of game: <?htmlspecialchars($_POST)['genre'])?></p>
    </body>
</html>