<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="?exo=1" method="post">
    <input type="checkbox" name="civilite[]" value="Monsieur"/>

    <?php
    if( isset($_POST["civilite"]))
        for($i = 0; $i < count($_POST["civilite"]); $i++)
        
            for( $j=0; $j < 11; j++)
                echo $_POST["civilite"][$i] ."*".$j" vaut :".$_POST["civilite"][$i]*$j)."</br>"
    ?>
</body>
</html>