<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<meta charset="utf-8">
<title>課題テンプレート</title>
</head>
<body>
<h1>入力フォーム</h1>
<h2>入力してください</h2>
<form action="write.php" method="post">
	お名前: <input type="text" name="name"><br>
	EMAIL: <input type="text" name="mail"><br>
メモ: <textarea name="memo" cols="30" rows="10"></textarea><br>
	<button type="submit">送信</button>
</form>
<h1>入力したデータの確認</h1>
<div><a href="read.php">read.phpファイル</a>をクリックして確認します</div>
</body>
</html>