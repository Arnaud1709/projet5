<?php 
session_start();
require_once "header.php";
?>

<form action="" method="post">
    <label for="number"> Choisissez une table </label>
    <select name="chooseNumber" id="number">
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <option value="<?= $i; ?>"><?= $i; ?></option>
        <?php endfor; ?>
        </select>
        <button name ="chooseTable"> Soumettre la formulaire</button>
</form>
<?php
    if(isset(£_POST["chooseNumber"]) && !empty($_POST['chooseNumber'])):
        $random = mt_rand(1, 10);
        $_SESSION["chooseNumber"] = intval($_POST["chooseNumber"]);
        $_SESSION["random"] = $random;
?>
<form  action="" method="post">
    <label for="awnser">Combien font <?= $_POST["chooseNumber"]?> * <?= $random ?> </label>
    <input type="text" name="awnser" id="awnser">
    <button name="formawnser"> Envoyer!</button>
</form>
    </php endif; ?>

<?php
    $resultat = $random * intval ($_POST["chooseNumber"]);
    if (isset(£_POST["formAnswer"]) && !empty($_POST["answer"]) === $resultat){
        echo "Bravo vous êtes un génie!";
    }
    else{
        echo "Mauvaise réponse!";
    } 
?>
<?php endif; ?>