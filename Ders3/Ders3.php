<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-3</title>
</head>
<body>
    <?php
       /*Uygulama Ödevi
       Kuyruk ve Yığın yapılarının php kullanılarak örneklendirilmesini gerçekleştiriniz.
       */
      $randSayı = rand(10,100);
      if ($randSayı  >50)
      {
        echo($randSayı);
        echo "<br>";
        echo("Geçtiniz");
      }
      else{
      echo($randSayı);
      echo "<br>";
      echo ("Kaldınız");
      }
      echo "<h3>Sık Kullanılan String Fonksiyonları</h3>";
      $yazı = "Aydın Adnan Menderes Üniversitesi";
      // ters slash "\" işareti ile de yapılabilinir 
      echo "\$yazı değişkeninin içeriği : $yazı";
      echo "<br> \$yazı değişkeninin türü : ". gettype($yazı);

      /* İçeriğin Büyük Harfe Dönüştürülmesi
      */
      echo "<br>".strtoupper($yazı);
      echo "<br>".mb_strtoupper($yazı); //Türkçe Karekterlerde sıkıntı çıkartmaması için
      echo "<br>".strtolower($yazı);
      echo "<br>".mb_strtolower($yazı); //Türkçe Karekterlerde sıkıntı çıkartmaması için
      echo "<br>".ucfirst($yazı); //Cümlenin ilk harfini büyük yazar
      echo "<br>".ucwords($yazı); //Cümlenin bütün kelimelerini büyük harf ile başlatır
      echo "<br>".strlen($yazı); //Cümlenin harf sayısı
      echo "<br>";
      for ($i=0; $i < 256; $i++) { 
        echo "$i = ".chr($i)."<br>";
      }

      /*Bir metni diziye dönüştürülmesi*/ 
      $metin = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda culpa numquam est vel! Ipsa saepe officiis soluta quidem quae reiciendis cumque enim optio a, ab facilis quisquam minus ipsam amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nobis adipisci dolorum eum sapiente tempora quas reprehenderit. Minus, est. Dolore quis modi voluptatem reiciendis magni officia error aperiam molestias esse?";
      $dizi = explode(" ",$metin);
      $dizi1 = explode(".",$metin);
      $dizi2 = explode("?",$metin);

      echo "Dizideki kelime sayısı : ". count($dizi)+1;
      echo "<br>";
      echo "Dizideki cümle sayısı : ". count($dizi1)+count($dizi2);
      echo "<br>";
      $tarih = "2022-11-20";
      $diziTarih = explode("-",$tarih);
      echo "Tarih: ".$diziTarih[2].".".$diziTarih[1].".".$diziTarih[0];
      echo "<br>";
      $aylar = ["ocak","şubat","mart","nisan"];
      print_r($aylar);
      /*
        str_split():
    Verilen bir metnin belirten sayı kadar ayrılarak bir dizi içeriğine aktarılması. Eğer sayı belirtilmezse metni harf harf böler. 
     */
    echo "<br>";
    $iban = "TR0010002000300040005000";
    $ibanYeni = str_split($iban, 4);
    print_r($ibanYeni);
    echo "<br>";

    foreach ($ibanYeni as $parca) {
        echo "$parca ";
    }

    /*  Trim - Substr - str_replace - md5 - sha1*/
      









    ?>
</body>
</html>