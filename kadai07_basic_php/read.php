<?php
// ファイルを変数に格納
$filename = "./data/data.csv"
// ファイルが存在するか確認
//if (!file_exists($filename)) {
//    die("CSVファイルが見つかりません。");
//}

// 読み取り専用でcsvファイルを読み込む
$data= array("");
if (($lines = fopen($filename, 'r')) !== false) {
    while (($row = fgetcsv($lines)) !== false) {
        // 各行のデータからカンマを取り除き、配列に格納
        $cleanedRow = array_map(function($value) {
            return str_replace(',', '', $value);
        }, $row);
        $data[] = $cleanedRow;
        var_dump($data); // 中身を表示する
      }
    // ファイルを閉じる（引数＝fopenで開いた、閉じたいファイルポインタ)
    fclose($lines);
} else {
    die('CSVファイルを開くことができませんでした。');
}
//  echo nl2br($str);// nl2br ファイルの改行"\n"を<br>に変換する関数

// HTML出力 csvファイルの先頭列に、あらかじめ内容を入れておく
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSVデータ表示</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>CSVデータを表示する</h1>
    <table>
        <thead>
            <tr>
                <?php if (!empty($data)) { -->
                    // ヘッダーを表示
                    foreach ($data[0] as $header) {
                        echo "<th>" . htmlspecialchars($header) . "</th>";
                    }
                } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            // データ部分を表示
            for ($i = 1; $i < count($data); $i++) {
                echo "<tr>";
                foreach ($data[$i] as $cell) {
                    echo "<td>" . htmlspecialchars($cell) . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
