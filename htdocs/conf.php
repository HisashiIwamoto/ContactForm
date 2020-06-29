<?php
include "../modle/csv.php";
include "../modle/Check.php";
include "../modle/formDB.php";

$data = '';
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
