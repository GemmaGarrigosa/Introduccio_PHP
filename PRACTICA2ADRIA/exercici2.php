<!-- 
    Programa per gestionar les habitacions d'un hotel.
    Volem guardar el nombre de clients que hi ha en cada
    habitació. Segons el nombre donarà un dels següents
    resultats:
        · 0 -> l'habitació està buida
        · 1~4 -> l'habitació té n persones
        · 5 -> l'habitació està plena
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestió d'habitacions</title>
</head>
<body>
    <?php
        $floor = array(5);
        for ($i=0; $i<5; $i++) {
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
            $floor[$i] = $rooms;
        }
    ?>
    <ul>
        <?php for($i=0; $i<5; $i++) { ?>
            <?php for ($j=0; $j<10; $j++) { ?>
                <li>A l'habitació <?php echo $j." de la planta ".$i; ?>
                    <?php // usem condicional per mostrar el resultat dessitjat
                        if ($rooms[$j] == 5) {
                            echo "està plena.";
                        } else if ( $rooms[$j] == 0) {
                            echo "està buida.";
                        } else {
                            echo "té ".$rooms[$j]." persones.";
                        }
                    ?>
                </li>
            <?php } ?>
        <?php } ?>
    </ul>
</body>
</html>