<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* uygulama ödevi 
    kuyuruk ve yığın veri yapılarının php üzerinde dizileri kullanarak örneklendirilmesini gerçekleştir.
     */
    /* uygulama: rasgele üretilen sayı 50 den büyükse 
    geçtiniz: notunuz:xx
    50 den küçükse 
    kaldınız:notunuz:xx 
    uygulamasınız gerçekleştiriniz.
     */



echo "<h3> sık kullanılan string fonksiyonlar </h3>";
$yazi="aydın adnan menderes universitesi";
echo "\$yazi değişkenşn içeriği: $yazi";
echo"<br>\$yazı değişken türü :". gettype($yazi);

/*  iççeriğin büyük harfe dönüştürülmesi */
echo "<br>\yazi'nin büyük harfle yazılması:".$byazi= strtoupper($yazi);
echo "<br>\yazi'nin büyük harfle yazılması:".$byazi= mb_strtoupper($yazi);

/*  iççeriğin küçük harfe dönüştürülmesi */
echo "<br>\yazi'nin küçük harfle yazılması:".$kyazi= strtolower($byazi);
echo "<br>\yazi'nin küçük harfle yazılması:".$kyazi= mb_strtolower($byazi);

/*  iççeriğin ilk harfinin büyük harfe dönüştürülmesi */
echo "<br>\yazi'nin ilk harfi büyük:".$kyazi= ucfirst($kyazi);

/*  iççeriğin her kelimenin ilk harfinin büyük harfe dönüştürülmesi */
echo "<br>\yazi'nin her kelimenin ilk harfi büyük:".$kyazi= ucwords($kyazi);

/* içeriğin harf sayısı: */
echo "<br>\$yazi'nin harf sayısı:".strlen($yazi);
echo"<br>";

/* asscıı char dönüşümü */
echo" karakter karşılığı :(65)".chr(65);
echo" <br>";
echo " karakter karşılığı :(100)".chr(100);
echo" <br>";
/* 0-255 arasındaki değerleri chr fonksiyonuna sokarak satır satır yazdırınız */

for ($i=33; $i <= 126 ; $i++) { 
    echo"$i:".chr($i)." ";
}

/* metin paraçalanarak diziye dönüştürülmesi */
echo "<br><br>";
echo $yazi . "<br>";
$dizi=explode(" ", $yazi);

echo"<pre>";
print_r($dizi);
echo"</pre>";

/* uygulama: veri tabanından 2022-11-20 şekline gelen tarihi 20.11.2022 şeklined gösteriniz */
$tarih="2022-11-20";
$tarihDizisi=explode("-",$tarih);
echo "<pre>";
print_r($tarihDizisi);
echo "</pre>";
echo "tarih: $tarihDizisi[2]. $tarihDizisi[1]. $tarihDizisi[0]";

/* dizinin metne dönüştürülmesi(implode) */
echo"<br>";
$aylarDizisi = array(
    "ocak",
    "şubat",
    "mart",
    "nisan",
    "mayıs",
    
);
echo"<pre>";
print_r($aylarDizisi);
echo"</pre>";
echo $aylarString=implode("-",$aylarDizisi);

/* str_split string parçalama işlemi yapar */
echo "<br>";

$iban= "TR0000000000111122223333";
$yeniIban = str_split($iban,4);
echo"<pre>";
print_r($yeniIban);
echo"</pre>";

foreach($yeniIban as $parca) {
    echo"$parca";
}

echo"<br>";
echo "implode Iban:". implode(" ",$yeniIban);


    ?>
</body>
</html>