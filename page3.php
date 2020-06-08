<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    echo '<form action="" method="post">';
        for ($table = 1; $table <= 10; $table++)
        {
            echo "<input type=\"checkbox\" name=\"table[]\" value=\"$table\">table $table<br />";
        }
        echo "<input type=\"submit\" name=\"submit_table\" value=\"Calcul\"/>";
    echo '</form>';

    if (isset($_POST) && (isset($_POST["submit_table"])) && (count($_POST["table"])>0))
    {
        foreach($_POST["table"] as $tableChecked)        
        {
            echo "TABLE $tableChecked <br />";
            for ($tableCompteur = 1; $tableCompteur <= 10; $tableCompteur++)
            {
                $result = $tableCompteur * $tableChecked;
                echo "      $tableCompteur * $tableChecked = $result <br />";
            }
            echo "<br />";
        
        }
    }
?>    
</body>
</html>