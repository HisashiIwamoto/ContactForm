<?php
class Check
{
  public $errors = [
    'name' => 'ユーザー名が未入力です',
    'mail' => '入力を確認してください',
    'body' => '未入力',
    'works' => '未入力',
    'gender' => '未入力',
    'accept' => '未入力',
    'namelength' => '名前は25文字以内にしてください',
    'maillength' => 'メールアドレスは100文字以内にしてください'
  ];

  public function emptyCheck($input, $name)
  {
    if (!$input) {
      return $this->errors[$name];
    }
  }

  public function lengthCheck($input, $num, $name)
  {
    if (strlen($input > $num)) {
      return $this->errors[$name];
    }
  }
}
