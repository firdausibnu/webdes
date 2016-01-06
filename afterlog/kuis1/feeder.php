<?php

function getQuestions(){
$questions = array();
$questions[0] = array("id"=> "kumkum1", "question"=>"Apakah kepanjangan dari HTML?", "choices"=>array(
                array("id"=> 1, "value"=>"hyper text markup language"),
                array("id"=> 2, "value"=>"hyper text mark language"),
                array("id"=> 3, "value"=>"hight text mark language"),
                array("id"=> 4, "value"=>"high true mobile language")), 
                "answer"=> 1);
$questions[1] = array("id"=> "kumkum2", "question"=>"Software berikut ini termasuk Software Browser, kecuali….. ", "choices"=>array(
                array("id"=> 1, "value"=>"Netscape Navigator"),
                array("id"=> 2, "value"=>"Opera"),
                array("id"=> 3, "value"=>"Macromedia Dreamweaver"),
                array("id"=> 4, "value"=>"Internet Explorer")), 
                "answer"=>3);
$questions[2] = array("id"=> "kumkum3", "question"=>"Perintah <BR> digunakan untuk ...", "choices"=>array(
                array("id"=> 1, "value"=>"membuat efek tulisan"),
                array("id"=> 2, "value"=>"menulis teks pada baris berikutnya (ganti baris)"),
                array("id"=> 3, "value"=>"memasang background"),
                array("id"=> 4, "value"=>"membuat garis")), 
                "answer"=> 2);
$questions[3] = array("id"=> "kumkum4", "question"=>"Berikut ini adalah Software untuk mendesain Halaman Web (Web Design Software), kecuali…", "choices"=>array(
                array("id"=> 1, "value"=>"Microsoft Frontpage"),
                array("id"=> 2, "value"=>"macromedia dreamweaver"),
                array("id"=> 3, "value"=>"Adobe Image Ready"),
                array("id"=> 4, "value"=>"google chrome")), 
                "answer"=> 4);
$questions[4] = array("id"=> "kumkum5", "question"=>"Berikut ini adalah Bahasa Pemrograman Web, kecuali...", "choices"=>array(
                array("id"=> 1, "value"=>"XML"),
                array("id"=> 2, "value"=>"Javascript"),
                array("id"=> 3, "value"=>"EXL"),
                array("id"=> 4, "value"=>"CSS")), 
                "answer"=>3);
$questions[5] = array("id"=> "kumkum6", "question"=>"Heading HTML mempunyai level ukuran huruf...", "choices"=>array(
                array("id"=> 1, "value"=>"1 sampai 6"),
                array("id"=> 2, "value"=>"1 sampai 7"),
                array("id"=> 3, "value"=>"0 sampai 6"),
                array("id"=> 4, "value"=>"0 sampai 7")), 
                "answer"=> 1);
$questions[6] = array("id"=> "kumkum7", "question"=>"Software untuk menulis bahasa HTML yang paling sederhana adalah …", "choices"=>array(
                array("id"=> 1, "value"=>"microsoft access"),
                array("id"=> 2, "value"=>"microsoft word"),
                array("id"=> 3, "value"=>"command prompt"),
                array("id"=> 4, "value"=>"notepad")), 
                "answer"=>4);
$questions[7] = array("id"=> "kumkum8", "question"=>"Untuk memberi gambar pada  belakang web diatur dengan mengubah nilai atribut …", "choices"=>array(
                array("id"=> 1, "value"=>"body"),
                array("id"=> 2, "value"=>"bgcolor"),
                array("id"=> 3, "value"=>"body background"),
                array("id"=> 4, "value"=>"head")), 
                "answer"=> 3);
$questions[8] = array("id"=> "kumkum9", "question"=>"Untuk memisahkan baris pada web dapat digunakan tag …", "choices"=>array(
                array("id"=> 1, "value"=>" < B >"),
                array("id"=> 2, "value"=>" < BR >"),
                array("id"=> 3, "value"=>" < U >"),
                array("id"=> 4, "value"=>" < HR >")), 
                "answer"=> 2);
$questions[] = array("id"=> "kumkum10", "question"=>"Untuk membuat garis horizontal didalam web dapat digunakan tag …", "choices"=>array(
                array("id"=> 1, "value"=>"< HR >"),
                array("id"=> 2, "value"=>"< H1 >"),
                array("id"=> 3, "value"=>"< P >"),
                array("id"=> 4, "value"=>"< BR >")), 
                "answer"=>1);
                return $questions;
                }
?>