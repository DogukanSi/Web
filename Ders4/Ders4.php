<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Php'de Diziler</h3>
    <ol>
        <li>Dizi oluşturmak için array() fonksiyonu veya [] kullanılabilir.</li>
        <li>Dizi içerisinde farklı türden birçok değer bulunabilir.(int, string, double, obje) (1,2,3,"Ali","Ahmet","125,20") </li>
        <li>"echo $diziAdi" ile dizi içeriği ekrana yazdırılamaz. Array to String Conversion hatası verir. Fakat dizinin örneğin 3 indisine sahip elemanı elemanı "echo $diziAdi[3]" şeklinde yazdırılabilir.</li>
        <li>Dizinin içerisindeki string ifadeler çift tırnak("") içerisine yazılır.</li>
        <li>Dizinin içerisindeki int ifadeler direk yazılabilir.</li>
        <li>Dizinin elemanları birbirinden virgül(,) ile ayrılır.</li>
        <li>Dizi içerisinde indisler varsayılan olarak 0'dan başlar.</li>
        <li>Diziler içerisinde diziler tanımlanabilir.</li>
    </ol>
    <?php
    $tel = "+905342026807";
    $teldizi = str_split($tel, 3);
    $i = 0;
    foreach ($teldizi as $parca) {
        echo "$parca ";  
    }
    echo "<br>";
    $yenitel = str_split($tel);
    print_r($yenitel);
    $dizi = array(1,2,3,4,"Kemal","Arıca",130.5);
    echo "<br>";
    print_r($dizi);
    $dizi1 = [1,2,3,4,"Kemal","Ahmet",130.5];
    echo"<pre>";
    print_r($dizi1);
    echo"</pre>";
    echo "Dizinin 5. elemanı: ".$dizi[5];
    echo "<br>Dizinin 5. elemanının türü: ".gettype($dizi[5]);
    echo"<br>";
    foreach ($dizi1 as $anahtar => $deger) {
        echo " $anahtar - $deger <br>";
    }
    $sayilar= array(
        array(1,3,5,7,9),
        array(2.2,4.4,6.6,8.8,10.10)

    );
    echo"<pre>";
    print_r($sayilar);
    echo"</pre>";
    echo "Sayılar Dizisinin 2. Dizisinin 3. Elemanı= ".$sayilar[1][2];
    $sayilar= array(
        "Integer" => array(1,3,5,7,9),
        "Double" => array(2.2,4.4,6.6,8.8,10.10)
    );
    echo"<pre>";
    print_r($sayilar);
    echo"</pre>";
    echo "Sayılar Dizisinin Integer Dizisinin 3. Elemanı= ".$sayilar["Integer"][2];
    $bilgiler = array(
        "id"        => 1,
        "adi"       => "Neslişah",
        "soyadi"    => "Gülmez",
        "gsm"       => "5343333333",
        "cinsiyet"  => "Kız",
        "yas"       => 30
    );
    echo"<pre>";
    print_r($bilgiler);
    echo"</pre>";
    $kullanıcılar = array(
        "Kullanıcılar1" => array(
        "id"        => 1,
        "adi"       => "Neslişah",
        "soyadi"    => "Gülmez",
        "gsm"       => "5343333333",
        "cinsiyet"  => "Kız",
        "yas"       => 30
        ),
        "Kullanıcılar2" => array(
            "id"        => 2,
            "adi"       => "Ahmet",
            "soyadi"    => "Güler",
            "gsm"       => "5343333333",
            "cinsiyet"  => "Erkek",
            "yas"       => 30
        )
    );
    echo"<pre>";
    print_r($kullanıcılar);
    echo"</pre>";

    ?>

</body>
</html>