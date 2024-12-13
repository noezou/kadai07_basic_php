# ① 課題番号-プロダクト名

kadai07_basic_php

## ② 課題内容（どんな作品か）

- アンケートアプリ
- index.php のフォームに入力し送信すると、write.php で受け取り、data.csv ファイルにカンマ区切り形式で書き込んだのち、index.php ファイルを再表示する。
- 送信して data.csv ファイルにデータを追加したのち、そのファイルの内容を確認するため、read.php ファイルへのリンクをクリックすると、data.csv ファイルからデータを取り出し、表形式で HTML 表示する。

## ③DEMO

## ④ 作ったアプリケーション用の ID または Password がある場合

- ID:
- PW:

## ⑤ 工夫した点・こだわった点

- 課題の最低ラインクリアを狙いました。

## ⑥ 難しかった点・次回トライしたいこと(又は機能)

- read.php で、変数を配列として宣言しようとしたところでつまづきました。
- csv ファイルを一行ずつ読み込んで、カンマを取って、td に入れたので、３要素が１セルに入ってしまいます。
- やりたかったイメージとしては、一行ずつ読み込んで、カンマで区切られた要素ごとに td 属性で個別のセルとして表示させることでした。while を入れ子にして、","の前を１要素として、"\n"までの間、繰り返し、それを行が終わるまで繰り返せばよいのかな？と思いつつ、まずは行単位でやってみたところでタイムアップ。
- [今後]入力した値のチェック（半角数字＆半角カタカナを全角に変換する、メールアドレスの形式となっているか、など）をきちんと行い、よくあるように確認画面を表示して、修正があれば全画面にもどって修正がなければ「登録」を選択して本登録されるように。

## ⑦ 質問・疑問・感想、シェアしたいこと等なんでも

- [質問]
- [感想]

