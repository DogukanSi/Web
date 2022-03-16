<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-2</title>
</head>
<body>
    <?php
    echo "<h4>Tırnak işaretleri arasındaki Farklar<h4>";
    echo "Adnan Menderes Üniversitesi";
    echo "<br>";
    $uni="Adnan Menderes Üniversitesi";
    echo "Kazandığınız Üniversite ".$uni;
    echo "<br>";
    echo "Kazandığınız Üniversite: $uni";
    echo "<br>";
    echo "Kazandığınız Üniversite "."$uni";
    echo "<br>";
    echo "Kazandığınız Üniversite ".'$uni';
    echo "<hr> <h4>Temel Matematiksel İşlemler</h4>";
    echo "<h5>Toplama çıkartma çarpma bölme</h5>";
    $sayı1 = 10;
    $sayı2 = 20;
    echo 'sayı 1 + sayı 2 = '.$sayı1 + $sayı2;
    echo "<br>";
    $sonuc = $sayı1+$sayı2;
    echo "$sayı1 + $sayı2 = $sonuc";
    echo "<br>";
    echo "$sayı1 - $sayı2 = ". $sayı1 - $sayı2;
    echo "<br>";
    echo "$sayı1 * $sayı2 = ". $sayı1 * $sayı2;
    echo "<br>";
    echo "$sayı1 / $sayı2 = ". $sayı1 / $sayı2;
    echo "<h5>Üst alma işlemi(pow)</h5>";
    $x="3";
    $y=2;
    $z=pow($x,$y);
    echo "$x<sup>$y</sup>= ".$z;
    echo '<br>$y Değişkeninin Tipi = '.gettype($y);
    echo '<br>$x Değişkeninin Tipi = '.gettype($x);
    echo "<h5>Karekök Alma İşlemi(sqrt)</h5>";
    $x = 25;
    $z = sqrt($x);
    echo "25'in karekökü = ".$z;
    echo "<h5>Mutlak değer işlemi(abs)</h5>";
    echo '|25| = '.abs($x);
    echo "<h5>Taban Değişim İşlemi(base_convert(x,Taban1,Taban2)</h5>";
    echo "27 sayısının 2'lik tabanda karşılığı = ". base_convert(27,10,2);
    echo "<h5>Mod İşlemi(fmod)</h5>";
    $x =15;
    $y=4;
    $Kalan= fmod($x,$y);
    echo "$x mod $y = $Kalan";
    echo "<h5>Yuvarlama işlemi(round)</h5>";
    $x =15.355;
    echo round($x,0);
    echo "<br>", round($x,1);
    echo "<br>", round($x,2);    
    echo "<h5>Yuvarlama işlemi(floor)</h5>";/*Her zaman aşağıdaki en yakın tam sayı değerini alır*/
    $x =15.9;
    echo floor($x);
    echo "<h5>Yuvarlama işlemi(ceil)</h5>";/*Her zaman yukarıdaki en yakın tam sayı değerini alır*/
    $x = 15.1;
    echo ceil($x);
    echo "<h5>Rasgele sayı üretme(rand)</h5>";
    for ($i =0;$i <3; $i++ )
    {
        echo "<br>".rand(10,20);
    }


    ?>

</body>
</html>