<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica2Gemma</title>
</head>
<body>
    <?php
    //for de 0 a 5 
        $floor = array(5);
        for ($i=0; $i < 5; $i++) {
            $rooms = [
                rand(0,5),
                rand(0,5),
                rand(0,5),
                rand(0,5),
                rand(0,5),
                rand(0,5),
                rand(0,5),
                rand(0,5),
                rand(0,5),
                rand(0,5)
            ];

            $floor[$i] = $rooms; // assignem habitacions a floor
         }
    ?>
    <ul>
        <?php for($i = 0; $i < 5; $i++) { // plantes?> 
            <?php  for($j = 0; $j < 10; $j++) { //habitacions ?>
                <li> 
                    <?php

                        if ($rooms[$j]== 0) {
                            echo 'La habitació '.$j.' de la planta '.$i.' està buida';
                        }else if ($rooms[$j]==5) {
                            echo 'La habitació '.$j.' de la planta '.$i.' està plena';
                        } else {
                            echo 'La habitació '.$j.' de la planta '.$i.' hi ha '.$rooms[$i].' persones';
                        }

                    ?>
                </li>
            <?php } ?>
        <?php } ?>
    </ul>
    
</body>
</html>