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
                    echo "<br>";
                    echo "<br>";
                    echo "The temperature is: ";
                    echo $deserialized->temperature;
                    echo "<br>";
                    echo "The pressure is: ";
                    echo $deserialized->pressure;
                    echo "<br>";
                    echo "The altitude is: ";
                    echo $deserialized->altitude;
                    echo "<br>";
                    echo "The timestamp is: ";
                    echo $deserialized->timestamp;

                }
        ?>

</body>
</html>
    