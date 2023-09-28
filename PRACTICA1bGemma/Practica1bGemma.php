<!-- Programa que omple un formulari mitjançant un for en PHP -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Practica 1b Gemma</title>
</head>
<body>
    <?php 
        //declarem el tipus datetime perque no podem fer-ho dins del array
        $dataNaixementAlumne = new DateTime();
        $dataNaixementAlumne -> setDate(1995, 03, 16);
        //declarem l'array
        $persona =['nomAlumne'=>'Gemma', 'cognomAlumne'=>'Garrigosa', 'edatAlumne'=>28,'telefonAlumne'=>'696542207','alumneTreballa'=>'Si', 'adrecaPostalAlumne'=>'Carrer Villarroel 177','adrecaElectronicaAlumne'=>'gemma.garrigosa@gmail.com', 'alsadaAlumne' => 170];
        //assignem la data de naixement ja formatejada a dins l'array
        $persona['dataNaixementAlumneFormat']= $dataNaixementAlumne -> format('Y-m-d');
    ?>
    <div>
        <h1> Descrivint a <?php echo $persona['nomAlumne'] ." ".$persona['cognomAlumne']; ?></h1>
    </div>
    <div>
        <h2> Les dades de <?php echo $persona['nomAlumne']; ?> son </h2>  
    </div>
    <form>
        <div>
            <?php for($i=0; $i<1; $i++) { ?>
            <ul>
                <!-- cridem la clau de cada element de l'array -->
                <li> Es diu: <?php echo $persona['nomAlumne']; ?> </li>
                <li> Te: <?php echo $persona['edatAlumne']; ?> </li>
                <li> Va neixer l'any: <b> <?php echo $persona['dataNaixementAlumneFormat']; ?></b></li>
                <li> El seu telèfon és: <?php echo $persona['telefonAlumne']; ?></li>
                <li> Viu a: <?php echo $persona['adrecaPostalAlumne']; ?></li>
                <li>El seu email és: <?php echo $persona['adrecaElectronicaAlumne']; ?></li>
                <li> Treballa: <?php echo $persona['alumneTreballa']; ?></li>
                <li> I medeix <?php echo $persona['alsadaAlumne']; ?></li>
            </ul>
            <?php } ?>
        </div>

    </form>
</body>
</html>