<?php
define('DB_DSN', 'mysql:dbname=contact_form;host=127.0.0.1');
define('DB_USER', 'iwamoto');
define('DB_PASSWORD', 'zjCSmwunKPQQLb3L');

function db($data)
{
  $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");

  try {
    $pdo = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
    $smt = $pdo->prepare("INSERT INTO post(name, mail, body, works,gender) VALUES(:name, :mail,:body,:works,:gender)");
    $smt->bindParam(':name', $data['name'], PDO::PARAM_STR);
    $smt->bindParam(':mail', $data['mail'], PDO::PARAM_STR);
    $smt->bindParam(':body', $data['body'], PDO::PARAM_STR);
    $smt->bindParam(':works', $data['works'], PDO::PARAM_STR);
    $smt->bindParam(':gender', $data['gender'], PDO::PARAM_STR);
    $smt->execute();
  
  } catch (PDOException $e) {
    echo 'error' . $e->getMessage();
    die();
  }
}
