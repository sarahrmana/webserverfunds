<html>
<head>
    <h1>Control the LED with GPIO</h1>
</head>
<body>
        <?php
            `gpio -g mode 28 out`;
            if(isset($_GET['off']))
            {
                echo "LED is off";
                `gpio -g write 28 0`;
            }
                elseif(isset($_GET['on']))
            {
                echo "LED is on";
                (`gpio -g write 28 1`);
            }
        ?>
</body>
</html>
    