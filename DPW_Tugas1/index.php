<?php

echo "Hewan";
echo "<hr>";

class Hewan
{
    public $jumlah_kaki, $bisa_terbang;
}

class Kucing extends Hewan
{
    function bersuara()
    {
        return "Meong meong meong";
    }
    function bisa_terbang()
    {
        return "Tidak bisa terbang";
    }
}
class Anjing extends Hewan
{
    function bersuara()
    {
        return "Guk guk guk";
    }
    function bisa_terbang()
    {
        return "Tidak bisa terbang";
    }
}
class Elang extends Hewan
{
    function bersuara()
    {
        return "Mmiiiipppppp";
    }
    function bisa_terbang()
    {
        return "Bisa terbang";
    }
}
class Angsa extends Hewan
{
    function bersuara()
    {
        return "Kwakkkkk kwaakkkkkkk";
    }
    function bisa_terbang()
    {
        return "Tidak bisa terbang";
    }
}

//Kucing
$Hima = new Kucing;
$Hima->jumlah_kaki = 4;
echo   "Hima adalah Kucing <br>";
echo   "Punya kaki sebanyak :" . $Hima->jumlah_kaki . "<br>";
echo   "Apakah bisa terbang? : " . $Hima->bisa_terbang() . "<br>";
echo   "Bersuara : " . $Hima->bersuara() . "<br>";

echo "<hr>";

//Anjing
$Uka = new Anjing;
$Uka->jumlah_kaki = 4;
echo   "Uka adalah Anjing <br>";
echo   "Punya kaki sebanyak :" . $Uka->jumlah_kaki . "<br>";
echo   "Apakah bisa terbang? : " . $Uka->bisa_terbang() . "<br>";
echo   "Bersuara : " . $Uka->bersuara() . "<br>";

echo "<hr>";

//Elang
$Rayn = new Elang;
$Rayn->jumlah_kaki = 2;
echo   "Rayn adalah Elang <br>";
echo   "Punya kaki sebanyak :" . $Rayn->jumlah_kaki . "<br>";
echo   "Apakah bisa terbang? : " . $Rayn->bisa_terbang() . "<br>";
echo   "Bersuara : " . $Rayn->bersuara() . "<br>";


echo "<hr>";

//Ara
$Ara = new Angsa;
$Ara->jumlah_kaki = 2;
echo   "Ara adalah Angsa <br>";
echo   "Punya kaki sebanyak :" . $Ara->jumlah_kaki . "<br>";
echo   "Apakah bisa terbang? : " . $Ara->bisa_terbang() . "<br>";
echo   "Bersuara : " . $Ara->bersuara() . "<br>";

echo "<hr>";
