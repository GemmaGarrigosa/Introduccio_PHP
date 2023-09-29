<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Practica 2 Gemma</title>
</head>
<body>
    <?php 
       //declarem l'array de taules
       $tables = [
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

        
        
        <?php for ($i=0; $i <10; $i++) {  ?>

                <li>
                    <?php   

                        if ($tables[$i] == 0) {
                                echo "La taula ". $i." està buida";
                        } else if ($tables[$i] == 5) {
                                echo "La taula " .$i. " està plena";
                        } else {
                                echo "La taula ". $i. " té ".$tables[$i]." comensals";
                        }
                    ?> 

                </li>
            <?php } ?>
                
        </ul>
    </body>
</html>