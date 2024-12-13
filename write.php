<?php
// XSS(クロスサイトスクリプティング)対策
function h($str){
    return htmlspecialchars($str,ENT_QUOTES);
}

$name = $_POST['name'];
$mail = $_POST['mail'];
$memo = $_POST['memo']."\n";// \n 改行
// if($name == ""){
//     $name = '<p style="color:red;">未入力</p>';
// }

 var_dump($_name); //中身を表示する
 var_dump($_mail);
 var_dump($_memo);
$c = ",";
$str = $name.$c.$mail.$c.$memo."\n";

file_put_contents("./data/data.csv",$str,FILE_APPEND);

// index.php ファイルを表示させる
header("Location: index.php");
exit;

?>

<html>
<head>
    <meta charset="utf-8">
    <title>File書き込み用</title>
</head>
<body>
<!-- 以下のHTMLは表示されない 
 ＝ hederでindex.phpに飛ばしているので -->
    <h1>書き込み</h1>
    <h2>./data/data.csv</h2>
    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="index.php">戻る</a></li>
    </ul>
</body>

</html>
