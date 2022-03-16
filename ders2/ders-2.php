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
   echo "<h4> tırnak işareti arasındaki farklar</h4>";
   $uni="adnan menderes üniversitesi";

   echo "adnan menderes üniversitesi";
   $uni = "adnan menderes üniversitesi";
   echo "değişken içeriği : $uni";
   echo "<br>";
   /*değişkenin ismini yazdırır */
   echo "kazandığınız üniversite: " . '$üni';
   echo "<br>";
   /* değişkeniin içeriğibni yazdırır */
   echo "kazandığınız üniversite: " . "$uni";
   echo "<br>";
   echo "kazandığınız üniversite: " . $uni;
   echo "<br>";
   echo "<hr> <h4> temel matematiksel işlemler </h4>";
   echo "<h5> toplama işlemi</h5>";
   $sayi1 = 10;
   $sayi2 = 20;
   echo '$sayi1 + $sayi2 =' . ($sayi1 + $sayi2);
   echo "<br>";
   echo "$sayi1 + $sayi2 = " . ($sayi1 + $sayi2);
   $sonuc = $sayi1 + $sayi2;
   echo"<br>";
   echo "$sayi1 + $sayi2 = $sonuc";

   echo "<h5> çıkarma işlemi</h5>";
   $sayi1 = 10;
   $sayi2 = 20;
   echo '$sayi1 - $sayi2 =' . ($sayi1 - $sayi2);
   echo "<br>";
   echo "$sayi1 - $sayi2 = " . ($sayi1 - $sayi2);
   $sonuc = $sayi1 - $sayi2;
   echo"<br>";
   echo "$sayi1 - $sayi2 = $sonuc";

   echo "<h5> çarpma işlemi</h5>";
   $sayi1 = 10;
   $sayi2 = 20;
   echo '$sayi1 * $sayi2 =' . ($sayi1 * $sayi2);
   echo "<br>";
   echo "$sayi1 * $sayi2 = " . ($sayi1 * $sayi2);
   $sonuc = $sayi1 * $sayi2;
   echo"<br>";
   echo "$sayi1 * $sayi2 = $sonuc";

   echo "<h5> bölme işlemi</h5>";
   $sayi1 = 10;
   $sayi2 = 20;
   echo '$sayi1 / $sayi2 =' . ($sayi1 / $sayi2);
   echo "<br>";
   echo "$sayi1 / $sayi2 = " . ($sayi1 / $sayi2);
   $sonuc = $sayi1 / $sayi2;
   echo"<br>";
   echo "$sayi1 / $sayi2 = $sonuc";
   
   echo "<h5> üst alma işlemi (pow) </h5>";
   $x = 3;
   $y = 2;
   echo "değişken tipi: $y >>>" .gettype($y) . "<br>";
   echo "$x<sup>$y</sup> =" . (pow($x,$y));

   echo "<h5> karekök alma işlemi(sqrt) </h5>";
   $x = 25 ;
   $karekok = sqrt( $x);
   echo "$x' in karekökü: $karekok";

   echo "<h5> mutlak değer işlemi(abs) </h5>";
   $x = (-4);
   $mutlak=abs($x);
   echo "|$x| in mutlak değeri : $mutlak";

   echo "<h5> taban değiştirme işlemi (base_convert(x,taban1,taban2)) </h5>";
   $sayi=30;
   $taban=10;
   $yenitaban=2;
   echo"27 sayısının 2'lik tabandaki karşılığı:" . base_convert(27, 10, 2 );
   echo "<br>";
   $sonuc= base_convert($sayi,$taban,$yenitaban);
   echo "($sayi)<sup>$taban</sup> : ($sonuc)<sup>$yenitaban</sup>";

   echo "<h5> mod işlemi (fmod(x,y,)) </h5>";
   $x=15;
   $y=4;
   $mod=fmod(15,4);
   echo "$x mod $y = $mod";
   echo "<br> $x sayısı: " . ((fmod($x,2)==0)? "çifttir.": "tektir.");

   echo "<h5> yuvarlama işlemi (round(x,y)) </h5>";
   $x=15.315;
   echo "<br> $x bir ondalık basamak yuvarlaması:" . round($y,2);

   echo "<h5> yuvarlama işlemi (floor(x)) </h5>";
   /* her zaman en yakın aşağı tam sayı değerine yuavarlama yapar */
   $x=15.315;
   echo "$x:" . floor($x);

   echo "<h5> yuvarlama işlemi (ceil(x)) </h5>";
   /* her zaman en yakın yukarı tam sayı değerine yuavarlama yapar */
   echo "$x:".ceil($x);
   
   echo "<h5> rasgele sayı üretme  (rand()) </h5>";
   echo "10-100 arasında rasgele değer :" .rand(10,100);

   for ($i=1; $i <= 10 ; $i++) { 
   echo "<br> $i eleman :" . rand(10,100);
   }



   
   ?> 
</body>
</html>