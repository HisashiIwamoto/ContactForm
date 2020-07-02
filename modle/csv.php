<?php
class CSV
{
  function csv()
  {
    $data = [];
    $info = fopen("../csv/info.csv", "a");
    $data['name'] = $_SESSION['name'];
    $data['mail'] = $_SESSION['mail'];
    $data['body'] = $_SESSION['body'];
    $data['works'] = $_SESSION['works'];
    $data['gender'] = $_SESSION['gender'];
    $data['accept'] = $_SESSION['accept'];
    fputcsv($info, $data);
  }
}
