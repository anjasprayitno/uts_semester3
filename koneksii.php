<?php
$user="root";
$server="localhost";
$password="";
$database="db_cuti";
$conn=mysql_connect($server,$user,$password);
if($conn) {
	echo  ' Oke ';
} else {
	echo  ' Cek Lagi ';
}
$db=mysql_select_db($database);
if($db) {
	echo  ' Database Berhasil Mendukung ';
} else {
	echo  ' Cek Lagi ';
}
?>