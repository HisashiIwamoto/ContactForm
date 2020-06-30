<?php
include "../modle/csv.php";
include "../modle/formDB.php";
include "../view/complatahtml.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = trim(filter_input(INPUT_POST, 'name'));
  $mail = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL);
  $body = trim(filter_input(INPUT_POST, 'body'));
  $works = trim(filter_input(INPUT_POST, 'works'));
  $gender = trim(filter_input(INPUT_POST, 'gender'));
  $accept = trim(filter_input(INPUT_POST, 'accept'));
} else {
  exit('Please try again');
}


$_SESSION['name'] = $name;
$_SESSION['mail'] = $mail;
$_SESSION['body'] = $body;
$_SESSION['works'] = $works;
$_SESSION['gender'] = $gender;
$_SESSION['accept'] = $accept;