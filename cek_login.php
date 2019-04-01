<?php
session_start();
include("koneksi_db.php");

$nm_user=md5($_POST['nm_user']);
$pass=$_POST['password'];
$password=md5($pass);

$query = "SELECT  *FROM user WHERE nm_user = '$nm_user'
AND password = '$password'";
$result = mysql_query ($query);
if(mysql_num_rows($result) !=0) {

    $row=mysql_fetch_array($result);
    $_SESSION['kd_user'] = $row['kd_user'];
    $_SESSION['nm_user'] = $row['nm_user'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['level'] = $row['level'];

    if($row['level'] == 'admin' || $row['level'] == 'user') {
        header("Location: admin.php");
    }

}
else {
    echo "Anda tidak berhasil login !";
    echo"<a href='index.php'>Silahkan Login Lagi</a>";
}
?>