<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    
    <?php
    $table = 3;
    $res ='Table de multiplication de '.$table. '<br />';
    $i = 0;

    while ($i < 11){
        $res .= $i.' x '.$table.' = '.$i*$table.'<br />';
        $i++;
    }
    echo $res;
    ?>
    <main>
</body>
</html>