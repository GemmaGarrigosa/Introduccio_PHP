<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Practica 1 Gemma</title>
</head>
<body>
    <?php 
         //declarem les variables que farem servir
        $nomAlumne = 'Gemma';
        $cognomAlumne = 'Garrigosa';
        $edatAlumne = 28;
        $dataNaixementAlumne = new DateTime();
        $dataNaixementAlumne -> setDate(1995, 03, 16);
        $telefonAlumne = '696542207';
        $alumneTreballa ='Si';
        $adrecaPostalAlumne = 'Carrer Villarroel 177';
        $adrecaElectronicaAlumne = 'gemma.garrigosa@gmail.com';
        $alsadaAlumne = 170;

        
    ?>
    <div>
        <h1> Descrivint a <?php echo $nomAlumne." ".$cognomAlumne ?></h1>
    </div>
    <div>
        <h2> Les dades de <?php echo $nomAlumne ?> son </h2>  
    </div>
    <div>
        <ul>
            <li> Es diu: <?php echo $nomAlumne ?> </li>
            <li> Te <?php echo $edatAlumne ?> </li>
            <li> Va neixer l'any <?php echo $dataNaixementAlumne-> format('Y-m-d'); ?></li>
            <li> El seu telèfon és: <?php echo $telefonAlumne ?></li>
            <li> Viu a: <?php echo $adrecaPostalAlumne ?></li>
            <li>El seu email és: <?php echo $adrecaElectronicaAlumne ?></li>
            <li> Treballa: <?php echo $alumneTreballa ?></li>
            <li> I medeix <?php echo $alsadaAlumne ?></li>
        </ul>
    </div>
</body>
</html>