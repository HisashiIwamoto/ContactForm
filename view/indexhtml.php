<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="conf.php" method="POST">
    <p><input type="text" name="name" value="<?= $name ?>"></p>
    <p><?= $error['name']; ?></p>
    <p><input type="text" name="mail" value="<?= $mail ?>"></p>
    <p><?= $error['mail']; ?></p>
    <p><textarea name="body" id=""><?= $body ?></textarea></p>
    <p><?= $error['body']; ?></p>
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
    <p><?= $error['works']; ?></p>
    <label for=""><input type="radio" name="gender" value="M" <?php if ($gender == "M") {
                                                                    echo 'checked="checked"';
                                                                  } ?>>男性</label>
    <label for=""><input type="radio" name="gender" value="F" <?php if ($gender == "F") {
                                                                    echo 'checked="checked"';
                                                                  } ?>>女性</label>
    <p><?= $error['gender']; ?></p>
    <p><label><input type="checkbox" name="accept" value="on" <?php if ($accept == "on") {
                                                                    echo 'checked="checked"';
                                                                  } ?>>同意する</label></p>
    <p><?= $error['accept']; ?></p>
    <button>send</button>
  </form>
</body>

</html>