<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pràctica 1b</title>
    </head>
    <body>
        <?php
        $dataNaixAlumne = new DateTime();
        $dataNaixAlumne->setDate(1990, 12, 29);
        $persona = [
            'nomAlumne'=>'Adrià',
            'cognomsAlumne' => 'García Pérez',
            'edatAlumne' => 32,
            'telefonAlumne' => '655122290',
            'adrecaAlumne' => 'Carrer de LLàcuna, 120',
            'emailAlumne' => 'adria.garcia@iticbcn.cat',
            'treballaAlumne' => 'Sí',
            'alturaAlumne' =>  180 
        ];
        $persona['dataNaixAlumne'] = $dataNaixAlumne->format('Y-m-d');
        ?>
        <h1>Descrivint a <?php echo $persona['nomAlumne']." ".$persona['cognomsAlumne']; ?></h1>
        <h2>Les dades de <?php echo $persona['nomAlumne']; ?> son:</h2>
        <form>
            <ul>
                <?php for ($i=0;$i<1;$i++) {?>
                    <li>Es diu: <?php echo $persona['nomAlumne']; ?></li>
                    <li>Te <?php echo $persona['edatAlumne']; ?> anys</li>
                    <li>Va neixer l'any: <?php echo $persona['dataNaixAlumne']; ?></li>
                    <li>El seu telèfon és: <?php echo $persona['telefonAlumne']; ?></li>
                    <li>Viu a: <?php echo $persona['adrecaAlumne']; ?></li>
                    <li>El seu email és: <?php echo $persona['emailAlumne']; ?></li>
                    <li>Treballa: <?php echo $persona['treballaAlumne']; ?></li>
                    <li>I medeix <?php echo $persona['alturaAlumne']; ?></li>
                <?php }?>
            </ul>
        </form>
    </body>
</html>