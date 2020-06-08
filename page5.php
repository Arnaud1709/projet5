<?php 
require_once "header.php";
?>
<?php
$randoms =[];
$result = [];
for($i = 0; $i < 5; $i++){
    $rand1 = mt_rand(1,10);
    $rand2 = mt_rand(1,10);
    $result = $rand1 * $rand2;
    $results[$i][] = $rand1;
    $results[$i][] = $rand2;
    $results[$i][] = $result;
} ?>

<?php
    for ($i = 0; $i < 5; $i++){
        echo"<label>Combien font ". $result[$i][0] ." * ". $result[$i][1] . "? </label>";
    ?>
    <input type="text" name="result<?= $i ?>"
    }