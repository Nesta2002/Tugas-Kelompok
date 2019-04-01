<?php

session_start();
include('library/koneksi_db.php');
session_destory();
header("Location: index.php");

?>