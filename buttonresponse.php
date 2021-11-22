<html>
<head>
    <h1>Control the LED with GPIO/Obtain measurements</h1>
</head>
<body>
        <?php
            `gpio mode 28 out`;
            if(isset($_GET['off']))
            {
                echo "LED is off";
                `gpio write 28 0`;
            }
                elseif(isset($_GET['on']))
            {
                echo "LED is on";
                (`gpio write 28 1`);
            }
                elseif(isset($_GET['msr']))
                {
                    $raw = `./bme280`; 
                    echo $raw;
                    $deserialized = json_decode($raw); 
                    var_dump($deserialized); 
                    echo "The temperature is:" $deserialized->temperature;
                }
        ?>

</body>
</html>
    