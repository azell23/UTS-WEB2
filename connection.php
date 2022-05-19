<?php
session_start();
$host = 'ec2-54-165-184-219.compute-1.amazonaws.com';
$port = '5432';
$user = 'bcpthcywzipsbp'; 
$password = 'b0f0291e61873566fb87386656ac56bece5981867317d763bae4c83e2ba29c21';
$db   = 'd8nd2u86cdc0';

$connection = pg_connect("host=$host port =$port dbname=$db user=$user password=$password");
// if($connection){
// echo 'Koneksi Berhasil';
// }
// else{
// echo 'Koneksi Gagal';
// }
// ?>