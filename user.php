<?php
session_start();

include('library/koneksi_db.php');

if($_SESSION['level']=='admin'){
    echo"<table>";

    echo"<tr>";
    echo"<th>";
    echo"<h1>USER MANAGER</h1></th>";
    echo"</tr>";

    echo"<tr >";
    echo"<td>ID USER</td>";
    echo"<td>USERNAME</td>";
    echo"<td>PASSWORD</td>";
    echo"<td>LEVEL</td>";
    echo"<td>EDIT</td>";
    echo"<td>HAPUS</td>";
    echo"</tr>";

    $query="SELECT * FROM user ORDER BY kd_user";
    $result=mysql_query($query);

    while($row=mysql_fetch_array($result)){
        echo"<tr>";
        echo"<td>";
    echo"$row[kd_user]";
        echo"</td>";
        echo"</td>";
    echo"$row[nm_user]";
    echo"</td>";
    echo"</td>";
    echo"$row[password]";
    echo"</td>";
    echo"</td>";
    echo"$row[level]";
    echo"</td>";
    echo"</td>";
    echo"<a
    href='admin.php?p=user/from_edit_user&kd_user_=$row[kd_user]'
    >";
    echo"Edit</a>";
            echo"</td>";
    echo"<td>";
            echo"<a
    href='admin.php?p=user/hapus_user&kd_user=$row[kd_user]'>";
    echo"Hapus</a>";
            echo"</td>";
    echo"</tr>";
    }

    echo"<tr>";
    echo"<td>";
    echo"<a href='admin.php?p=user/form_input_user'>";
    echo"<input name='input_user'type='submit'value='Tambah' />";
    echo 
    

}