<!DOCTYPE html>
<html>
<head>
    <title>Video Games</title>
</head>
    <body>
        <p><?= var_dump($_GET) ?></p>
        <p><?= var_dump($_POST) ?></p>

        <h1>Form on video games</h1>
        <form>
            <form action="videogames.php" method="post">

            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname" required/><br>
            <label for="lname">Last name:</label>
            <input type="text" id="lname" name="lname" required/><br>
        <h1>
            Please enter your age
        </h1>
            <label for="age">Age:</label>
            <input type="text" id="age" name="age" pattern="[0-9]{2}" title="10-99, numbers only" required/><br>
        <h1>
            Please check all genres of video games you play
        </h1>
            <input type="checkbox" id="rpg" name="rpg" value="RPG">
            <label for="rpg">RPG</label><br>
            <input type="checkbox" id="openworld" name="openworld" value="openworld">
            <label for="openworld">Open World</label><br>
            <input type="checkbox" id="fps" name="fps" value="fps">
            <label for="fps">FPS</label><br>
            <input type="checkbox" id="sports" name="sports" value="sports">
            <label for="sports">Sports</label><br>
            <input type="checkbox" id="mmo" name="mmo" value="mmo">
            <label for="mmo">MMO</label><br>
            <input type="checkbox" id="puzzle" name="puzzle" value="puzzle">
            <label for="puzzle">Puzzle</label><br>
            <input type="checkbox" id="racing" name="racing" value="racing">
            <label for="racing">Racing</label><br>
            <input type="checkbox" id="other" name="other" value="other">
            <label for="other">Other, please specify:</label><label for="other"></label>
            <input type="text" id="other" name="other"/><br>
        <h1>
            Please select the amount of hours per week you play video games on average
        </h1>
            <input type="radio" id="0-2" name="hours" value="0-2">
            <label for="0-2">0-2 hours</label><br>
            <input type="radio" id="2-4" name="hours" value="2-4">
            <label for="2-4">2-4 hours</label><br>
            <input type="radio" id="4-7" name="hours" value="4-7">
            <label for="4-7">4-7 hours</label><br>
            <input type="radio" id="7-12" name="hours" value="7-12">
            <label for="7-12">7-12 hours</label><br>
            <input type="radio" id="12-17" name="hours" value="12-17">
            <label for="12-17">12-17 hours</label><br>
            <input type="radio" id="17-22" name="hours" value="17-22">
            <label for="17-22">17-22 hours</label><br>
            <input type="radio" id="22-30" name="hours" value="22-30">
            <label for="22-30">22-30 hours</label><br>
            <input type="radio" id="30-35" name="hours" value="30-35">
            <label for="30-35">30-35 hours</label><br>
            <input type="radio" id="35+" name="hours" value="35+">
            <label for="35+">35+ hours</label><br>

            <h1>Please select your favourite console</h1>
                <input list="consoles" name="console">
                <datalist id="consoles">
                  <option value="PC">
                  <option value="Playstation">
                  <option value="Xbox">
                  <option value="Nintendo Switch">
                  <option value="Mobile">
                  <option value="Other">
                </datalist> <br><br>
                <input type="submit" value="Submit">
        </form>
    </body>
</html>