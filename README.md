# お問い合わせフォーム

## 環境構築
- Dockerのビルド
- git clone git@github.com:Takahashi-3141/contact-form.git
- cd contact-form
- docker-compose up -d

- Laravel環境構築
  1. docker-compose exec php bash
  2. composer install
  3. cp .env.example .env
  4. php artisan key:generate
  5. php artisan migrate
      

## 使用技術(実行環境)
- Laravel Framework 8.83.8
- PHP 8.3.15
- git version 2.43.0

## URL
- 開発環境：http://localhost/
- phpMyAdmin:http://localhost/8080/
