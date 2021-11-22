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
                    br;
                    br;
                    echo "The temperature is: ";
                    echo $deserialized->temperature;
                    br;
                    echo "The pressure is: ";
                    echo $deserialized->pressure;
                    br;
                    echo "The altitude is: ";
                    echo $deserialized->altitude;
                    br;
                    echo "The timestamp is: ";
                    echo $deserialized->timestamp;

                }
        ?>

</body>
</html>
    