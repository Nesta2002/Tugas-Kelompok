<?php 
    session_start();
    include("library/koneksi_db.php");
    include("header.php");

    if(($_SESSION['level']=="admin")||($_SESSION['level']=="user"))
    {
        echo"<div id='utama'>";
        echo"<div id='kanan'>";
        $query="SELECT * FROM menu WHERE status='1'";
        $result=mysql_query($query);
        while($row=mysql_fetch_array($result))
        {
            echo"<a href='$row[link]'>&#187;$row[judul]</a><br/>";
        }
        echo"/div>";
        
        echo"<div id='isi'>";
        if(!empty($_GET['p'])) {
            if(file_exists($_GET['p'].".php")) {
                require_once($_GET['p'].".php");
            }
        }
    }
    echo"</div>";
    echo"</div>";
    include('footer.php');
?>