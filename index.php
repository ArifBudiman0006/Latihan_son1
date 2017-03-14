<?php
$json_data=file_get_contents("pekerja2.json");
$obj = json_decode($json_data);
echo "Nim : "; echo $obj->nim;
echo "<br>";
echo "Nama : "; echo $obj->nama;
echo "<br>";
echo "Alamat : "; echo $obj->alamat;
echo "<br>";
echo "NO Telepon : "; echo $obj->no_hp;
echo "<br>";
echo "Makul pertama: ";echo $obj->matakuliah[0];
echo "<br>";
echo "Makul kedua: ";echo $obj->matakuliah[1];
echo "<br>";
echo "Makul ketiga: ";echo $obj->matakuliah[2];
?>