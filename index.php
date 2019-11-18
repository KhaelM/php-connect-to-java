<?php
    require("fonctions.php");

    $filieres = getAllFilieres();
    $classes = getAllClasses();

    if(isset($_GET["filiere"]) && isset($_GET["classe"])) {
        $filiere = $_GET["filiere"];
        $classe = $_GET["classe"];

        $nbAdmis = getNombreAdmis($filiere, $classe);
        $nbAjourne = getNombreAjourne($filiere, $classe);
        $moyenne = getMoyenneGenerale($filiere, $classe);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client php</title>
</head>
<body>
    <form action="index.php" method="GET">
        <label for="filiere">Filieres</label>
        <select name="filiere" id="">
            <?php
                for ($i=0; $i < count($filieres); $i++) { 
            ?>
                    <option value="<?= $filieres[$i] ?>"><?= $filieres[$i] ?></option>
            <?php
                }
            ?>
        </select>
        <label for="classe">Classes</label>
        <select name="classe" id="">
            <?php
                for ($i=0; $i < count($classes); $i++) { 
            ?>
                    <option value="<?= $classes[$i] ?>"><?= $classes[$i] ?></option>
            <?php
                }
            ?>
        </select>
        <button type="submit">Afficher</button>
        <div>Admis: <span><?= isset($nbAdmis) ? $nbAdmis : "" ?></span></div>
        <div>Ajourne: <span><?= isset($nbAjourne) ? $nbAjourne : "" ?></span></div>
        <div>Moyenne générale: <span><?= isset($moyenne) ? $moyenne : "" ?></span></div>
    </form>
</body>
</html>