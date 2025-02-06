# Personal Training Management System

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)
![Node.js](https://img.shields.io/badge/Node.js-339933?style=for-the-badge&logo=nodedotjs&logoColor=white)

Sistem manajemen untuk personal training berbasis web menggunakan Laravel.

## Persyaratan Sistem

Sebelum menginstal, pastikan sistem Anda memenuhi persyaratan berikut:

- PHP >= 8.3.7
- Composer
- Node.js & NPM
- Git
- MySQL/MariaDB
- Laragon (recommended) atau XAMPP

## Langkah-langkah Instalasi

### 1. Clone Repository
bash
# Pindah ke direktori www Laragon
cd c:\laragon\www

# Clone repository
git clone https://github.com/Mutiara1616/personal-training.git

# Pindah ke direktori project
cd personal-training


### 2. Install Dependencies
bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install


### 3. Konfigurasi Environment
bash
# Copy file environment
cp .env.example .env

# Generate application key
php artisan key:generate


### 4. Setup Database
1. Buka Laragon
2. Klik tombol Database untuk membuka HeidiSQL
3. Buat database baru:
   - Nama database: personal_training
   - Charset: utf8mb4
   - Collation: utf8mb4_unicode_ci
4. Sesuaikan konfigurasi database di file .env:
   env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=personal_training
   DB_USERNAME=root
   DB_PASSWORD=
   

### 5. Migrasi Database
bash
# Jalankan migrasi database
php artisan migrate

# [Optional] Jalankan seeder jika ada
php artisan db:seed


### 6. Menjalankan Aplikasi
bash
# Terminal 1: Jalankan server Laravel
php artisan serve

# Terminal 2: Jalankan Vite untuk development
npm run dev


Aplikasi akan dapat diakses di:
- Frontend: http://localhost:8000
- Backend: http://localhost:8000/admin

## Fitur

- Manajemen Member
- Penjadwalan Training
- Tracking Progress
- Laporan dan Statistik
- Dan lain-lain

## Struktur Project


personal-training/
├── app/                    # Logic aplikasi
├── config/                 # Konfigurasi aplikasi
├── database/              # Migrasi dan seeder
├── public/                # Asset publik
├── resources/             # View dan asset
├── routes/                # Definisi route
└── tests/                 # Unit/Feature tests


## Kontribusi

Jika Anda ingin berkontribusi pada project ini:

1. Fork repository
2. Buat branch untuk fitur Anda (git checkout -b feature/AmazingFeature)
3. Commit perubahan Anda (git commit -m 'Add some AmazingFeature')
4. Push ke branch (git push origin feature/AmazingFeature)
5. Buat Pull Request

## Lisensi

Distributed under the MIT License. See LICENSE for more information.

## Kontak

Mutiara - [GitHub](https://github.com/Mutiara1616)

Project Link: [https://github.com/Mutiara1616/personal-training](https://github.com/Mutiara1616/personal-training)




<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
