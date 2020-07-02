<?php
include "../modle/csv.php";
include "../modle/formDB.php";

session_start();

$data['name'] = $_SESSION['name'];
$data['mail'] = $_SESSION['mail'];
$data['body'] = $_SESSION['body'];
$data['works'] = $_SESSION['works'];
$data['gender'] = $_SESSION['gender'];
$data['accept'] = $_SESSION['accept'];

/*
$name = trim(filter_input(INPUT_POST, 'name'));
$mail = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL);
$body = trim(filter_input(INPUT_POST, 'body'));
$works = trim(filter_input(INPUT_POST, 'works'));
$gender = trim(filter_input(INPUT_POST, 'gender'));
$accept = trim(filter_input(INPUT_POST, 'accept'));


$_SESSION['name'] = $name;
$_SESSION['mail'] = $mail;
$_SESSION['body'] = $body;
$_SESSION['works'] = $works;
$_SESSION['gender'] = $gender;
$_SESSION['accept'] = $accept;
*/

$csv = new CSV;
$csv->csv($data);
$db = new FormDB;

$db->db($data);

include "../view/complatahtml.php";