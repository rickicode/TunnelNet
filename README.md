โ๏ธ Base Admin Panel
======================
>  Easy way to create Admin Panel.
> 
## ๐ Requirements

- PHP version: >= 8.0
- Composer
- Node.js

`
git init
git add .
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/rickicode/TunnelNet.git
git push -u origin main
`

## ๐งฐ Built with

- Laravel 9
- Livewire
- Bootstrap 5
- Tabler.io
- SweetAlert2
- spatie/laravel-permission


## ๐งพ Installation

1. `git clone https://github.com/alighasemzadeh/bap BaseAdminPanel`
2. `cd BaseAdminPanel`
3. Install dependencies:

   `composer install`

   `npm install`

4. `cp .env.example .env`
5. `php artisan key:generate`
6. Set your `.env` with credentials to your database server (`DB_*` settings) and your domain config (`APP_URL`).
7. `php artisan migrate --seed`
8. Build frontend with `npm run build` for production.
9. Run your server `php artisan serve`.
10. Username:info@bap.local/Password:P@ssw0rd321
