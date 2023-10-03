<!-- 
    Programa que representa el menjador d'un restaurant
    fent servir arrays i la funció random per indicar
    quants hi ha a cada taula.

    Segons la quantitat de comensals, el programa ens
    mostrarà un missatge amb la quantitat de comensals:
        · 0 -> la taula està buida
        · 1-4 -> la taula té <n>comensals
        · 5 -> la taula està plena
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servei de taules</title>
</head>
<body>
    <?php // declaració d'un array amb 10 nombres aleatoris fent servir rand()
        $taules = [
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
    ?>
    <ul>
        <?php for($i=0; $i<10; $i++){ ?>
        <li>La taula <?php echo $i ?>
            <?php // usem condicional per mostrar el resultat dessitjat
                if ($taules[$i] == 5) {
                    echo "està plena.";
                } else if ( $taules[$i] == 0) {
                    echo "està buida.";
                } else {
                    echo "té ".$taules[$i]." comensals.";
                }
            ?>
        </li>
        <?php } ?>
    </ul>
</body>
</html>