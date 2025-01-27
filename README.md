# お問い合わせフォーム

## 環境構築
- Dockerのビルド
- git clone git@github.com:coachtech-material/laravel-docker-template.git
- docker-compose up -d

- Laravel環境構築
  1. docker-compose exec php bash
  2. composer install
  3. .env.exampleファイルから.envを作成し、環境変数を変更
  4. php artisan key:generate
  5. php artisan migrate
      

## 使用技術(実行環境)
- Laravel Framework 8.83.8
- PHP 8.3.15
- git version 2.43.0

## URL
- 開発環境：http://localhost/
- phpMyAdmin:http://localhost/8080/
