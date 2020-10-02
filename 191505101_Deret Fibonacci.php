<!DOCTYPE html>
<html>
<head>
    <title>Deret Fibonacci by Marcel Prastiko Arthana</title>
</head>
<body style="background: url(background.jpg);background-size:cover;background-attachment: fixed;">
<h1> DERET FIBONACCI </h1>
<b> "Masukan Value Deret dan Jumlah" </b> <br> <br>
<form method="POST">
    Deret 1 : <input type="text" name="m" value="<?=isset($_POST['m']) ? $_POST['m'] : ''?>"><br><br>
    Deret 2 : <input type="text" name="p" value="<?=isset($_POST['p']) ? $_POST['p'] : ''?>"><br><br>
    Jumlah : <input type="text" name="a" value="<?=isset($_POST['a']) ? $_POST['a'] : ''?>"><br><br>
    <input type="submit" name= "submit" value="Result">
</form>
<?php
if (isset($_POST["submit"])){
        $m = $_POST['m'];
        $p = $_POST['p'];
        $a = $_POST['a'];
    echo "Hasil Deret Fibonacci Setelah Diinputkan User : <br> <br>";
    echo "Deret 1 = ".$m ."<br>";
    echo "Deret 2 = ". $p ."<br> <br>" ; 
    echo $a. " Deret Fibonacci Selanjutnya : <br>";
for ($i=0 ; $i<$a; $i++){
    $Result = $m + $p;
    echo "<br>".$Result;

             $m = $p;
             $p = $Result;
            }
        }
        ?>
    </body>
</html>