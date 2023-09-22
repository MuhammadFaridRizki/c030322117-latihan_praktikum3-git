<?php
$nilai=-100;
echo "<b> Tugas Praktikum Modul pemrograman wab Modul 4</b><br>";
echo "Nama : Muhammad Farid Rizki <br>";
echo "Kelas: TI-3D";
echo "<br>";

echo "Nilai anda :".$nilai;
echo "<br>";
if(($nilai >=90) && ($nilai <=100))
{
     echo "predikat : A";
}

elseif (($nilai >=76) && ($nilai <=89))
{
     echo "predikat : B";
}

elseif (($nilai >=60) && ($nilai <=75))
{
     echo "predikat : C";
}

elseif (($nilai >=50) && ($nilai <=59))
{
    echo "predikat : D"; 
}

elseif (($nilai >=0) && ($nilai <=49))
{
     echo "predikat : E";
}

else 
{
    echo "predikat : A";
}
?>