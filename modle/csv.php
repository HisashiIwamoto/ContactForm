<?php
function csv()
{
  $name = trim(filter_input(INPUT_POST, 'name'));
  $mail = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL);
  $body = trim(filter_input(INPUT_POST, 'body'));
  $works = trim(filter_input(INPUT_POST, 'works'));
  $gender = trim(filter_input(INPUT_POST, 'gender'));
  $accept = trim(filter_input(INPUT_POST, 'accept'));

  $name = $_SESSION['name'];
  $mail = $_SESSION['mail'];
  $body = $_SESSION['body'];
  $works = $_SESSION['works'];
  $gender = $_SESSION['gender'];
  $accept = $_SESSION['accept'];
  $inputtext = [
    array(
      $name,
      $mail,
      $works,
      $body,
      $gender,
      $accept
    )
  ];
  $info = fopen("../csv/info.csv", "a");
  foreach ($inputtext as $line) {
    fputcsv($info, $line);
  }
}
