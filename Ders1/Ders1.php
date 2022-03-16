<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Dersi</title>
</head>
<body>
<!--  -->
<?php
/*
Echo: 
-Çift tırnak veya tek tırnak ile kullanılabilir
-Çift tırnak içerisinde değişken yazılır
*/
echo "<h3>Aydın Adnan Menderes Üniversitesi</h3>"; //echo = Ekrana bişey yazmamızı sağlar
echo "<h4>Aydın Meslek Yükesek Okulu</h4>";
echo "Aydın Adnan Menderes Üniversitesi "."Aydın Meslek Yükesek Okulu";
echo "<br><br><h4>Değişken Atama kuralları</h4>
<ol>
<li>Değiken isimleri $ ile başlar</li>
<li>Değişken isimleri sayısal bi ifade ile başlayamaz</li>
<li>Değişken isimlerinde boşluk kullanılmaz</li>
<li>Değişken ve dosya isimlerinde türkçe karakter kullanılmamalıdır</li>
<li>Değişken isimlerinde büyük harf küçük harfe duyarlıdır \$sayı != \$Sayı</li>
<li>Değişken içerisinde metin varsa (\") veya (') kullanılır</li>
<li>Değişken içerisinde eğer metinsel bir ifade varsa tırnak kullanılmadan yazılır</li>
<li>/ Kaçış kodudur</li>
<li>Değişkenler echo ile ekrana yazdırılır</li>
</ol>";
echo "<hr> <h4>Değişken Tanımlama Örnekleri</h4>";
$uni = "Aydın Adnan Menderes Üniversitesi";
$Myo = "Bilgisayar Programcılığı";
$numara = 206001017;
$isim = "Doğukan";
$soyad = "Sirkecioğlu";
$yas = 19;
echo "$isim $soyad ";
echo $isim." ".$soyad;
/*
Uygulama:
Üniversite, myo, ad, soyad, numara değişkenlerini oluşturup içeriğini uygun bi şekilde doldurunuz.
Girilen bu değişkenlerin değerlerini tabloda yazın
*/
?>
<table border="1">
    <tr>
        <td>Üniversite</td>
        <td>Myo</td>
        <td>Ad</td>
        <td>Soyad</td>
        <td>Numara</td>
    </tr> 
    <tr>
        <td><?=$uni?></td>
        <td><?=$Myo?></td>
        <td><?=$isim?></td>
        <td><?=$soyad?></td>
        <td><?=$numara?></td>
    </tr>
</table>
</body>
</html>