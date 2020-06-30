<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>入力画面</title>
</head>
<style>
  body {
    margin: 0;
    text-align: center;
  }

  form {
    margin: 0 auto;
    display: flex;
    justify-content: center;
    flex-direction: column;
    width: 50vw;
  }

  button {
    margin: 0 auto;
    width: 20vw;
  }

  .error {
    color: red;
  }
</style>

<body>
  <h1>入力内容の編集</h1>
  <form action="conf.php" method="POST">
    <div class="name">
      <p><input type="text" name="name" value="<?= $name ?>" placeholder="名前"></p>
      <p class="error"><?= $error['name']; ?></p>
    </div>
    <div class="mail">
      <p><input type="text" name="mail" value="<?= $mail ?>" placeholder="メールアドレス"></p>
      <p class="error"><?= $error['mail']; ?></p>
    </div>
    <div class="contact">
      <p><textarea name="body" id="" placeholder="お問い合わせ内容"><?= $body ?></textarea></p>
      <p class="error"><?= $error['body']; ?></p>
    </div>
    <div class="job">
      <select name="works" id="">
        <option value="student" <?php if ($works == "sutudent") {
                                  echo 'selected="selected"';
                                } ?>>学生</option>
        <option value="worker" <?php if ($works == "worker") {
                                  echo 'selected="selected"';
                                } ?>>社会人</option>
        <option value="other" <?php if ($works == "other") {
                                echo 'selected="selected"';
                              } ?>>その他</option>
      </select>
      <p class="error"><?= $error['works']; ?></p>
    </div>
    <div class="gender">
      <label for=""><input type="radio" name="gender" value="M" <?php if ($gender == "M") {
                                                                  echo 'checked="checked"';
                                                                } ?>>男性</label>
      <label for=""><input type="radio" name="gender" value="F" <?php if ($gender == "F") {
                                                                  echo 'checked="checked"';
                                                                } ?>>女性</label>
      <p class="error"><?= $error['gender']; ?></p>
    </div>
    <div class="agree">
      <p><label><input type="checkbox" name="accept" value="on" <?php if ($accept == "on") {
                                                                  echo 'checked="checked"';
                                                                } ?>>同意する</label></p>
      <p class="error"><?= $error['accept']; ?></p>
    </div>
    <button>send</button>
</body>

</html>