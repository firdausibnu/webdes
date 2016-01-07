<?php

function getQuestions() {
    $questions = array();
    $questions[0] = array("id" => "1234", "question" => "CSS is used to...", "choices" => array(
            array("id" => 1, "value" => "You're crafty! This is a trick question."),
            array("id" => 2, "value" => "lend structure to the document"),
            array("id" => 3, "value" => "mold the presentation of the document"),
            array("id" => 4, "value" => "script the interactions on the page")),
        "answer" => 1);
    $questions[1] = array("id" => "9453", "question" => "The * selector selects...", "choices" => array(
            array("id" => 1, "value" => "every div element"),
            array("id" => 2, "value" => "only paragraphs"),
            array("id" => 3, "value" => "every element"),
            array("id" => 4, "value" => "only parent elements")),
        "answer" => 3);
    $questions[2] = array("id" => "8173", "question" => "CSS is used to...", "choices" => array(
            array("id" => 1, "value" => "lend structure to the document"),
            array("id" => 2, "value" => "mold the presentation of the document"),
            array("id" => 3, "value" => "script the interactions on the page"),
            array("id" => 4, "value" => "You're crafty! This is a trick question.")),
        "answer" => 4);
    $questions[3] = array("id" => "3362", "question" => "The * selector selects...", "choices" => array(
            array("id" => 1, "value" => "every div element"),
            array("id" => 2, "value" => "every element"),
            array("id" => 3, "value" => "only paragraphs"),
            array("id" => 4, "value" => "only parent elements")),
        "answer" => 2);
    $questions[4] = array("id" => "kumkum5", "question" => "Berikut ini adalah Bahasa Pemrograman Web, kecuali...", "choices" => array(
            array("id" => 1, "value" => "XML"),
            array("id" => 2, "value" => "Javascript"),
            array("id" => 3, "value" => "EXL"),
            array("id" => 4, "value" => "CSS")),
        "answer" => 3);
    $questions[5] = array("id" => "kumkum6", "question" => "Heading HTML mempunyai level ukuran huruf...", "choices" => array(
            array("id" => 1, "value" => "1 sampai 6"),
            array("id" => 2, "value" => "1 sampai 7"),
            array("id" => 3, "value" => "0 sampai 6"),
            array("id" => 4, "value" => "0 sampai 7")),
        "answer" => 1);
    $questions[6] = array("id" => "kumkum7", "question" => "Software untuk menulis bahasa HTML yang paling sederhana adalah …", "choices" => array(
            array("id" => 1, "value" => "microsoft access"),
            array("id" => 2, "value" => "microsoft word"),
            array("id" => 3, "value" => "command prompt"),
            array("id" => 4, "value" => "notepad")),
        "answer" => 4);
    $questions[7] = array("id" => "kumkum8", "question" => "Untuk memberi gambar pada  belakang web diatur dengan mengubah nilai atribut …", "choices" => array(
            array("id" => 1, "value" => "body"),
            array("id" => 2, "value" => "bgcolor"),
            array("id" => 3, "value" => "body background"),
            array("id" => 4, "value" => "head")),
        "answer" => 3);
    $questions[8] = array("id" => "kumkum9", "question" => "Untuk memisahkan baris pada web dapat digunakan tag …", "choices" => array(
            array("id" => 1, "value" => " < B >"),
            array("id" => 2, "value" => " < BR >"),
            array("id" => 3, "value" => " < U >"),
            array("id" => 4, "value" => " < HR >")),
        "answer" => 2);
    $questions[] = array("id" => "kumkum10", "question" => "Untuk membuat garis horizontal didalam web dapat digunakan tag …", "choices" => array(
            array("id" => 1, "value" => "< HR >"),
            array("id" => 2, "value" => "< H1 >"),
            array("id" => 3, "value" => "< P >"),
            array("id" => 4, "value" => "< BR >")),
        "answer" => 1);
    return $questions;
}

?>