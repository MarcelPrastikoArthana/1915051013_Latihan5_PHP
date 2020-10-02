<!DOCTYPE html>
<html>
<head>
    <title>Barisan Aritmatika by Marcel Prastiko Arthana</title>
</head>
<body style="background: url(background.jpg);background-size:cover;background-attachment: fixed;">
<h1> BARISAN ARITMATIKA </h1>
<b>---Masukan Nilai Awal, Nilai Beda, dan Suku Yang Akan Dicari---</b> <br> <br>
<form method="POST">
    Nilai Awal : <input type="text" name="m" value="<?=isset($_POST['m']) ? $_POST['m'] : ''?>"><br><br>
    Nilai Beda : <input type="text" name="p" value="<?=isset($_POST['p']) ? $_POST['p'] : ''?>"><br><br>
    Suku Yang Dicari : <input type="text" name="a" value="<?=isset($_POST['a']) ? $_POST['a'] : ''?>"><br><br>
    <input type="submit" name ="submit" value="Result">
    </form>
<?php
if (isset($_POST["submit"])){
                    $m = $_POST['m'];
                    $p = $_POST['p'];
                    $a = $_POST['a'];
                echo "Nilai Awal = ". $m ;
                echo "<br> Nilai Beda = ". $p ;
                echo "<br> <br> Hasil Barisan Aritmatika Setelah Diinputkan User : " ; 
for ($i=1 ; $i<=$a; $i++){
             $nilaisuku = $m + ($p*($i-1));    
            echo "<br>".$nilaisuku;
             }
                    $nilaisuku = $m + ($a-1) * $p;
                echo "<br> <br> Nilai Suku ke- " .$a; 
                echo "<br>".$nilaisuku;
            }
        ?>
    </body>
</html> 