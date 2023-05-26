<?php
include "aritmatika.php"; 
$aritmatika = new Aritmatika()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  action="#" method="post">
        <input type="text" name= "x">
        <select name="operasi">
        <option value="tambah">+</option>
        <option value="kali">x</option>
        <option value="kurang">-</option>
        <option value="bagi">/</option>
        <option value="modulus">%</option>
        </select>
        <input type="text" name= "y">
        <label>=</label>
        <input type="submit" value="Hitung">
    <form>

    <?php
        if($_POST) {
            $x = $_POST['x'];
            $y = $_POST['y'];
            if($_POST['operasi'] == "tambah") {
                echo "hasil: ".$x." + ".$y." = ".$aritmatika->setTambah($x, $y)."<br /><br />";
            }elseif($_POST['operasi'] == "kali") {
                echo "hasil: ".$x." x ".$y." = ".$aritmatika->setKali($x, $y)."<br /><br />";
            }elseif($_POST['operasi'] == "kurang") {
                echo "hasil: ".$x." - ".$y." = ".$aritmatika->setKurang($x, $y)."<br /><br />";
            }elseif($_POST['operasi'] == "bagi") {
                echo "hasil: ".$x." / ".$y." = ".$aritmatika->setBagi($x, $y)."<br /><br />";
            }elseif($_POST['operasi'] == "modulus") {
                echo "hasil: ".$x." % ".$y." = ".$aritmatika->setModulus($x, $y)."<br /><br />";
            }
        }
    ?>
</body>
</html>