<?php 
    $host="nama_server";
    $user="username_yang_digunakan";
    $pass="password_yang_digunakan";
    $db="database_yang_digunakan";

    $koneksi = mysql_connect($host, $user, $pass);
    mysql_select_db($db, $koneksi);
?>