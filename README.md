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

- 課題の最低ラインをクリアできるように。

## ⑥ 難しかった点・次回トライしたいこと(又は機能)

- read.php で、変数を配列として宣言しようとしたところでつまづきました。⇒ありがちな”;”入力漏れ
- csv ファイルを一行ずつ読み込んで、td に入れています。
- メモの部分で改行入れたデータで「送信」すると、次の行に回ってしまいます。「\n」とCRなど、改行と終わりのコードを勉強しないと駄目だなと思います。
- HTML表示だけなら、表にしないで、CSSで表示させるのもありなのかな、とは思いました。（せっかく、チーズアカデミーのページ作ったときに、敢えてtable使わずにcssで書いたのですから）
- [今後]入力した値のチェック（半角数字＆半角カタカナを全角に変換する、メールアドレスの形式となっているか、など）をきちんと行い、よくあるように確認画面を表示して、修正があれば全画面にもどって修正がなければ「登録」を選択して本登録されるように改善したいです。

## ⑦ 質問・疑問・感想、シェアしたいこと等なんでも

- [質問]
- [感想]

