<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$server = "localhost";
$dbname = "a_database";
$password = "";
$user = "root";

try{
    $db = new PDO('mysql:host='.$server.';dbname='.$dbname, $user, $password);
//    echo 'Koneksi Berhasil';
}catch  (PDOException $e){
    echo $e->getMessage();
}
