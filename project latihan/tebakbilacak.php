<?php

$angkaPilihan = $_POST['angka'];

if($angkaPilihan > $_COOKIE['angkaacak']){
    header("Location: angkabesar.php");
}else if($angkaPilihan < $_COOKIE['angkaacak']){
    header("Location: angkakecil.php");
}else{
    header("Location: tebakanbenar.php");
}

if(!isset($_COOKIE['angkaacak'])){
    $angkaRandom = rand(0, 100);
    setcookie("angkaacak", $angkaRandom, time()+3600, "/");
}


?>