<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>確認画面</title>
</head>
<style>
  body {
    margin: 0;
    text-align: center;
  }

  .form {
    width: 50vw;
    margin: 0 auto;
  }

  form {
    margin: 0 auto;
    display: flex;
    justify-content: center;
    flex-direction: column;
    width: 50vw;
  }

  button {
    margin: 10px auto;
    height: 3rem;
    width: 9rem;
  }

  p {
    text-align: left;
  }
</style>

<body>
  <div class="form">
    <h1>内容確認</h1>
    <p>名前:&nbsp;<?= $name; ?></p>
    <p>メールアドレス:&nbsp;<?= $mail; ?></p>
    <p>本文:&nbsp;<?= $body; ?></p>
    <p>仕事:&nbsp;<?= $works; ?></p>
    <p>性別:&nbsp;<?= $gender; ?></p>
    <p>同意:&nbsp;<?= $accept; ?></p>
    <a href="http://localhost:8888/index.php">最初からやり直し</a>
    <form action="edit.php" method="post">
      <button>編集</button>
    </form>
    <form action="complata.php" method="post">
      <button>完了</button>
    </form>
  </div>
</body>

</html>