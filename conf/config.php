<?php
date_default_timezone_set("ASIA/JAKARTA");


$con = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'dbnewsub',
    'host' => 'localhost'
);

// koneksi database
$mysqli = new mysqli($con['host'], $con['user'], $con['pass'], $con['db']);

// cek koneksi
if ($mysqli->connect_error) {
    die('Koneksi Database Gagal : '.$mysqli->connect_error);
}

$dateY = date('Y');
$dateYM = date('Ym');
$dateYMD = date('Ymd');

//$serverHost = $_SERVER['DOCUMENT_ROOT'];
$SERVER = $_SERVER['SERVER_NAME'];
$servAdmin = $SERVER.'/admin/default.php';
$servLogs = $SERVER;
$servRoot = $_SERVER['DOCUMENT_ROOT'];

$errorPages = '<script>window.location="'.$SERVER.'/404.php"</script>';

//setting dir
$_dirKategori = '../../upload/';
$_dirPost = '../../upload/';
$_dirLink = '../../upload/';
$_dirAgenda = '../../upload/';
$_dirFiles = '../../upload/';
$_dirGalery = '../../upload/';

$_fDirBan = 'images/banners/';
$_fDirBan = 'images/employees/';
?>
