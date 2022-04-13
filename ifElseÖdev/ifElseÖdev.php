<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $randSayı = rand(0,100);
    $randSayı1 = rand(1960,2022);
    if ($randSayı == 1)
    {
        echo "Bu sayı Tektir = ".$randSayı;
        echo "<br>";
    }
    else if ($randSayı == 0)
    {
        echo "Bu sayı çiftdir = ".$randSayı;
        echo "<br>";
    }
    else if ($randSayı % 2 == 0)
    {
        echo "Bu sayı çiftdir = ".$randSayı;
        echo "<br>";
    }
    else
    {
        echo "Bu sayı Tektir = ".$randSayı;
        echo "<br>";
    }
    if ($randSayı  >= 50)
    {
        echo "Sınavdan Geçtiniz, notunuz = ".$randSayı."<br>";
    }
    else{
        echo "Sınavdan Kaldınız, notunuz = ".$randSayı."<br>";
    }
    if ($randSayı1>2004)
    {
        echo "Ehliyet Alamazsınız";
    }
    else
    {
        echo "Ehliyet Alabilirsiniz";
    }
    ?>

</body>
</html>