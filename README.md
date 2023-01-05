# Florence

![Image](https://user-images.githubusercontent.com/110820784/210612315-f40e206b-7bdd-4104-bfd3-bd61d2576cf5.png)

## 概要

Florence は実家の両親が経営している女子学生専用アパートです。

本リポジトリは、Florence の情報をまとめた Web サイトになります。

また、WordPress テンプレートにしています。

## 背景

近年は入居者が減っている傾向があり、入居者を増やしたいという課題を抱えておりました。

現状 Florence の Web サイトは存在せず、インターネットから情報を調べることができません。

入居者のターゲットが学生ということもあり、インターネットで情報を公開することで入居者の増加が期待できると考え、本サイトを作成することにしました。

## 機能

### お知らせ投稿機能

![Image](https://user-images.githubusercontent.com/110820784/210747773-01e883bf-c185-4120-82a9-1da4f928182c.png)

WordPress の投稿ページから更新が可能です。

### Gallery の画像をモーダル表示

![Image](https://user-images.githubusercontent.com/110820784/210757304-38cc7094-8cb9-430c-9956-8a04892f9c7f.png)

lightgallery というプラグインを使用し、作成しました。

## ターゲット

- 群馬大学医学部に入学する予定の女子学生
- 10 代〜20 代

# 資料

## カンプ

https://www.figma.com/file/6sMVReAEelo3D6Hd3LTYiq/%E7%84%A1%E9%A1%8C?node-id=77%3A976&t=Jv36iGjR6JLGNOOO-1

## サイトマップ

```mermaid
  graph TD;
  A[FlorenceA TOPページ]
  S[ニュース]
  B[About]
  C[FlorenceAの特徴]
  D[ギャラリー]
  F[お問い合わせ]

  G[FlorenceB TOPページ]
  T[ニュース]
  R[FlorenceBの特徴]
  H[About]
  J[ギャラリー]
  L[お問い合わせ]

  M[Florence TOPページ]
  N[About]
  I[ニュース]
  Q[アパート紹介ページ]
  O[Map]
  P[お問い合わせ]

      A-->B;
      A-->S;
      A-->C;
      A-->D;
      A-->F;

      G-->H;
      G-->T;
      G-->R;
      G-->J;
      G-->L;

      M-->Q;
      M-->N;
      M-->I;
      M-->O;
      M-->P;
      Q-->A;
      Q-->G;
```
