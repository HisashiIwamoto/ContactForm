<?php
include "../modle/Check.php";

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

session_start();
$name = $_SESSION['name'];
$mail = $_SESSION['mail'];
$body = $_SESSION['body'];
$works = $_SESSION['works'];
$gender = $_SESSION['gender'];
$accept = $_SESSION['accept'];


include "../view/edithtml.php";
