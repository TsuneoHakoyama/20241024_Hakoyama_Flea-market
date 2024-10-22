
# coachtechフリマ
###### 概要:フリーマーケットアプリ。会員登録することで出品された商品の購入や販売を希望する商品の出品ができる。
###### トップ画面 PC版
<img src="https://github.com/user-attachments/assets/c1689e37-467b-4e42-8ed9-cf438a65a881" width=700px>

###### トップ画面　Mobile版
<img src="https://github.com/user-attachments/assets/4071b11d-0582-4e46-b64b-0c917d7a6833" width="300px">

## アプリケーションURL
###### 開発環境：http://localhost/
###### phpMyAdmin:http://localhost:8080

## 機能一覧
###### ユーザー利用ページ
###### 会員登録：新規ユーザー情報の登録。登録すると登録完了を示すログイン画面への移動を促すページが表示される。
###### ログイン：登録されたメールアドレスとパスワードによる認証機能。
###### ログアウト：ログアウト機能。
###### 商品一覧取得：ログインの有無にかかわらず閲覧可能。ログインすることでマイページの閲覧、出品機能が利用可能となる。
###### 商品詳細取得：ログインの有無にかかわらず閲覧可能。ログインすることでマイページの閲覧、出品、商品一覧ページでのお気に入り登録、コメント、商品購入機能が利用可能となる。自身が出品した商品は購入できない。プロフィール未登録の場合プロフィール編集ページへと遷移する。
###### 商品検索：検索窓にキーワードを入力すると商品名および商品説明に対して部分一致の検索をすることができる。
###### お気に入り商品追加：お気に入り登録されていない商品の星ボタンを押すことでお気に入り登録ができる。
###### お気に入り商品削除：お気に入り登録されている商品の星ボタンを押すことでお気に入りを解除できる。
###### コメント追加：商品についてコメントすることができる
###### コメント削除：ユーザーは自身のコメントを削除することができる。
###### 商品購入：購入画面において支払方法をクレジットカード、コンビニ、銀行振込から選択することができる。支払方法にクレジットカードを選択した場合Stripeを利用した決済が可能。配送先を変更することができる。
###### ユーザー情報取得：マイページでユーザー名と登録画像を表示できる。プロフィール編集画面へと遷移できる。
###### プロフィール変更：プロフィール編集画面でプロフィールを変更することができる。
###### ユーザー購入商品一覧取得：ユーザーページで過去に購入した商品を閲覧できる。
###### ユーザー出品商品一覧取得：ユーザーページで過去に出品した商品を閲覧できる。
###### 出品：販売したい商品を登録し商品一覧に反映することができる。
######
###### 管理者利用ページ
###### 管理者用ログイン：/localhost/admin/loginにアクセスし、登録されたメールアドレスとパスワードを入力することで管理者用画面にアクセスできる。
###### 管理画面：ユーザー情報を閲覧できる。ユーザーの削除、ユーザーのコメント一覧ページへの遷移、メール送信ページへの遷移ができる。
###### ユーザーコメント削除：ユーザーのコメントを削除できる。
###### メール送信：選択した1人のユーザーにメールを送信できる。

## 使用技術
###### Docker version 26.1.1
###### Docker Compose version v2.27.0
###### nginx 1.21.1
###### PHP 7.4.9
###### Laravel 8.83.8
###### MySQL 8.0.26
###### MailHog
###### Stripe

## テーブル設計
###### テーブル仕様書
<img src="https://github.com/user-attachments/assets/14da2e0b-21b0-42c2-b078-adca7dac0934" width="600px">

## ER図
###### ER図
<img src="https://github.com/user-attachments/assets/379ec895-1b50-4453-8d2d-5ce73ab64423" width="600px">

## 環境構築
###### 1. git clone https://github.com/TsuneoHakoyama/20241024_Hakoyama_Flea-market.git
###### 2. cd 20241024_Hakoyama_Flea-market
###### 3. docker desktopの起動
###### 4. docker compose up -d --build
###### 5. docker compose exec php bash
###### 6. composer install
###### 7. cp .env.develop .env （本番環境の場合.env.productionを利用予定。現時点では環境変数は記載されていない。）
###### 8. php artisan key:generate
###### 9. php artisan migrate --seed
###### 10.php artisan storage:link
###### 11.localhostへアクセス (permission deniedエラーが出た場合、$ chmod -R 777 storage bootstrap/cacheを入力)。email:test1@example.com, password:passwordでログイン。
###### 12.管理画面にログインするにはlocalhost/admin/loginへアクセス。email:administrator1@example.com, password:administratorでログイン。

