<?php
includ('library/koneksi_db.php');
$kd_user = $_POST['kd_user'];
$nm_user = $_POST['nm_user'];
$pass = $_POST['password'];
$password= md5($pass);
$level = $_POST['level'];
$query = "UPDATE user SER nm_user='$nm_user'
password='$password' , level='$level' WHERE
kd_user='$kd_user'";
$result = mysql_query($result);

header("Locatin.admin.php?p=user/user");
if(empty($_GET['p'])){
  if(file_exists($_GET['p'].".php")){
  }
}
?>
