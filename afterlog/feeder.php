<?php

function getQuestions(){
$questions = array();
$questions[0] = array("id"=> "1234", "question"=>"CSS is used to...", "choices"=>array(
                array("id"=> 1, "value"=>"You're crafty! This is a trick question."),
                array("id"=> 2, "value"=>"lend structure to the document"),
                array("id"=> 3, "value"=>"mold the presentation of the document"),
                array("id"=> 4, "value"=>"script the interactions on the page")), 
                "answer"=> 1);
$questions[1] = array("id"=> "9453", "question"=>"The * selector selects...", "choices"=>array(
                array("id"=> 1, "value"=>"every div element"),
                array("id"=> 2, "value"=>"only paragraphs"),
                array("id"=> 3, "value"=>"every element"),
                array("id"=> 4, "value"=>"only parent elements")), 
                "answer"=>3);
$questions[2] = array("id"=> "8173", "question"=>"CSS is used to...", "choices"=>array(
                array("id"=> 1, "value"=>"lend structure to the document"),
                array("id"=> 2, "value"=>"mold the presentation of the document"),
                array("id"=> 3, "value"=>"script the interactions on the page"),
                array("id"=> 4, "value"=>"You're crafty! This is a trick question.")), 
                "answer"=> 4);
$questions[3] = array("id"=> "3362", "question"=>"The * selector selects...", "choices"=>array(
                array("id"=> 1, "value"=>"every div element"),
                array("id"=> 2, "value"=>"every element"),
                array("id"=> 3, "value"=>"only paragraphs"),
                array("id"=> 4, "value"=>"only parent elements")), 
                "answer"=>2);
                return $questions;
                }
?>