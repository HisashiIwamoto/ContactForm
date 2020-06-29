<?php

$name = trim(filter_input(INPUT_POST, 'name'));
$mail = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL);
$body = trim(filter_input(INPUT_POST, 'body'));
$works = trim(filter_input(INPUT_POST, 'works'));
$gender = trim(filter_input(INPUT_POST, 'gender'));
$accept = trim(filter_input(INPUT_POST, 'accept'));

$error = [
  'name' => '',
  'mail' => '',
  'body' => '',
  'works' => '',
  'gender' => '',
  'accept' => '',
  'namelength' => '',
  'maillength' => ''
];


include "../view/indexhtml.php";
