<?php
define('DB_DSN', 'mysql:dbname=contact_form;host=127.0.0.1');
define('DB_USER', 'iwamoto');
define('DB_PASSWORD', 'zjCSmwunKPQQLb3L');


$name = trim(filter_input(INPUT_POST, 'name'));
$mail = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL);
$body = trim(filter_input(INPUT_POST, 'body'));
$works = trim(filter_input(INPUT_POST, 'works'));
$gender = trim(filter_input(INPUT_POST, 'gender'));

$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");

try {
  $pdo = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
  $smt = $pdo->prepare("INSERT INTO post(name, mail, body, works,gender) VALUES(:name, :mail,:body,:works,:gender)");
} catch (PDOException $e) {
  echo 'error' . $e->getMessage();
  die();
}

$smt->bindParam(':name', $name, PDO::PARAM_STR);
$smt->bindParam(':mail', $mail, PDO::PARAM_STR);
$smt->bindParam(':body', $body, PDO::PARAM_STR);
$smt->bindParam(':works', $works, PDO::PARAM_STR);
$smt->bindParam(':gender', $gender, PDO::PARAM_STR);

$smt->execute();
