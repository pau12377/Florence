# Florence の更新手順

女子学生専用アパート Florence の Wordpress 用テーマとなります。

FlorenceA、FlorenceB の 2 棟のアパートの特徴を紹介します。

投稿機能を使用し、お知らせを更新することが可能です。

## 導入

1.本テーマ「Florence」には以下のファイルが格納されております。

- category.php
- footer.php
- front-page.php
- functions.php
- header.php
- img
- inclide
- index.php
- js
- page-florenceA_gallery.php
- page-florenceB_gallery.php
- README_WORDPRESS.md
- single.php
- style.css

  2.app > public > wp-content > themas 内に Florence フォルダを作成します。

フォルダ作成後、上記ファイルをコピーし貼り付けます。

![Image](https://user-images.githubusercontent.com/110820784/210499337-d9fac341-ee36-40e4-90aa-4974989d925b.png)

## ダッシュボードへのログイン

1.WordPress のダッシュボードにログインします。

下記 URL にアクセスします。

http://wordpress-florence

ユーザー名:florence

パスワード:florence1103

![Image](https://user-images.githubusercontent.com/110820784/210499546-e44c7069-707b-4a9a-a408-eeb2df752467.png)

## テーマの有効化

1.ダッシュボードにログイン後、外観 > テーマ　を選択します。

![Image](https://user-images.githubusercontent.com/110820784/210499914-f2b65325-a025-419c-8a9f-42cdaa9d7d5f.png)

2.「florence」を選択し、「有効化」をクリックします。

![Image](https://user-images.githubusercontent.com/110820784/210501402-9931ac71-6b80-4057-8a8f-a8e82f4515eb.png)

以上でテーマの有効化が完了しました。

## 固定ページの設定

1.固定ページを選択し、「新規追加」をクリックします。

![Image](https://user-images.githubusercontent.com/110820784/210520241-3b61b2bf-8866-4b36-bf05-2f3f1bdc17fa.png)

2.タイトルに「FlorenceA_Gallery」と入力し、「公開」をクリックします。

![Image](https://user-images.githubusercontent.com/110820784/210523825-8fcf49df-7db3-478c-be27-943db6f11ee6.png)

3.公開後、必ず URL が /florencea_gallery/ となっていることを確認してください。

テキストを間違えてしまった場合は、「ゴミ箱へ移動」をクリックします。

もう一度固定ページの「新規追加」をクリックし、タイトルに「FlorenceA_Gallery」と入力します。

![Image](https://user-images.githubusercontent.com/110820784/210522102-c7bf4b22-8d8a-43e1-8d4a-9d2caa270002.png)

4.同様の手順で「FlorenceB_Gallery」を作成します。

![Image](https://user-images.githubusercontent.com/110820784/210530186-648abec5-360e-401e-a36f-a9c1844de0d4.png)

以上で固定ページの設定が完了しました。

## カテゴリーの設定

1.カテゴリーを設定します。投稿 > カテゴリー を選択します。

名前に「FlorenceA」、スラッグに「florencea」と入力し、「新規カテゴリーを追加」をクリックします。

![Image](https://user-images.githubusercontent.com/110820784/210531820-64bcc9bd-73c1-4eb8-9b35-81de102d71e4.png)

2.名前に「FlorenceB」、スラッグに「florenceb」と入力し、「新規カテゴリーを追加」をクリックします。

![Image](https://user-images.githubusercontent.com/110820784/210532588-7ccbcd5e-e1e9-4c2d-9606-b5d66c2cf123.png)

3.名前に「Florence 全体」、スラッグに「florence」と入力し、「新規カテゴリーを追加」をクリックします。

![Image](https://user-images.githubusercontent.com/110820784/210533425-99ed9a38-edbc-4555-9845-6fe26f4d14a7.png)

以上でカテゴリーの設定が完了しました。

## お知らせの設定

1.投稿を選択し、「新規追加」をクリックします。

![Image](https://user-images.githubusercontent.com/110820784/210533617-69abf32d-7e2f-4df9-8b76-f60aa5a289f8.png)

2.タイトルにお知らせのタイトル、本文にお知らせの詳細を記載します。

![Image](https://user-images.githubusercontent.com/110820784/210534546-dffb525b-89ef-4b0b-802a-79669c742ff3.png)

3.お知らせのカテゴリーを選択します。

- FlorenceTOP ページに表示する場合：「Florence 全体」をクリックします

- FlorenceA に表示する場合：「FlorenceA」をクリックします

- FlorenceB に表示する場合：「FlorenceB」をクリックします

![Image](https://user-images.githubusercontent.com/110820784/210534980-478b69d8-13a0-4013-9de7-385b0b3dc0dc.png)

4.ページ上部の「公開」をクリックすると記事が公開されます。

記事を公開せず下書き状態で保存したい場合は「下書き保存」をクリックします。

また、記事は必ず「FlorenceA」「FlorenceB」に最低 1 件はある状態にしてください。

以上でお知らせの設定が完了しました。
