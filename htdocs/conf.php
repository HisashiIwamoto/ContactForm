<?php
include "../modle/Check.php";
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

session_start();
$_SESSION['name'] = $name;
$_SESSION['mail'] = $mail;
$_SESSION['body'] = $body;
$_SESSION['works'] = $works;
$_SESSION['gender'] = $gender;
$_SESSION['accept'] = $accept;

$check = new Check;

if (!empty($_POST)) {
  $error['name'] = $check->emptyCheck($name, 'name');
  $error['mail'] = $check->emptyCheck($mail, 'mail');
  $error['body'] = $check->emptyCheck($body, 'body');
  $error['works'] = $check->emptyCheck($works, 'works');
  $error['gender'] = $check->emptyCheck($gender, 'gender');
  $error['accept'] = $check->emptyCheck($accept, 'accept');
  if (strlen($name) > 26) {
    $error['name'] = '名前は25文字以内にしてください';
  }
  if (strlen($mail) > 100) {
    $error['mail'] = 'メールアドレスは100文字以内にしてください';
  }
}


foreach ($error as $key => $value) {
  $value = "";
  if (!$error[$key] == $value) {
    include "../view/indexhtml.php";
    exit;
  }
}

include "../view/confhtml.php";
