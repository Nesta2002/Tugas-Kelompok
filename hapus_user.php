<?php
include('library/koneksi_db.php');
$kd_user=$_GET['kd_user'];
$query="DELETE FROM user WHERE kd_user=$kd_user";
$result=mysql_query($query);
header("Location: admin.php?p=user/user");
if(!empty($_GET['p'])){
    if(file_exists($_GET['p'].".php")){
        requerie_once($_GET['p']".php");

    }
}
?>