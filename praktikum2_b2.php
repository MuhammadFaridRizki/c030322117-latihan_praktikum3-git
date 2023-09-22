<?php
$nilai=100;
echo "<b> Tugas Praktikum Modul pemrograman wab Modul 4</b><br>";
echo "Nama : Muhammad Farid Rizki <br>";
echo "Kelas: TI-3D";
echo "<br>";

echo "Nilai anda :".$nilai;
echo "<br>";

switch ($nilai) 
{
     case (($nilai >=90) && ($nilai <=100)):
     echo "predikat : A";
     break;
         
     case (($nilai >=76) && ($nilai <=89)):
     echo "predikat : B";
     break; 

     case (($nilai >=60) && ($nilai <=75)):
     echo "predikat : C";
     break; 

     case (($nilai >=50) && ($nilai <=59)):
     echo "predikat : D";
     break; 

     case (($nilai >=0) && ($nilai <=49)):
     echo "predikat : E";
     break; 

     default:
     echo "predikat: A";
     break;
}
?>