<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 🎮 GameReviews

Projeto de portfólio backend desenvolvido com **Laravel 13**.

Sistema de avaliações de jogos com layout moderno, responsivo e com cards de reviews.

---

## ✨ Tecnologias

- PHP 8.4+
- Laravel 13
- SQLite
- Tailwind CSS
- Vite
- Blade

---

## ⚙️ Pré-requisitos

Antes de rodar o projeto, você precisa ter instalado:

- PHP 8.2+
- Composer
- Node.js (18+)
- NPM

---

## 📥 CLONAR O PROJETO

```bash
# 1. Clonar o projeto
git clone https://github.com/20Pedroh/movie-log
cd movie-log

# 2. Instalar dependências PHP
composer install

# 3. Instalar dependências Node
npm install

# 4. Criar arquivo .env
cp .env.example .env

# 5. Gerar chave da aplicação
php artisan key:generate

# 6. Criar banco SQLite
touch database/database.sqlite

# 7. Rodar migrations + seed
php artisan migrate:fresh --seed

# 8. Rodar frontend (Tailwind/Vite)
npm run dev

# 9. Rodar servidor Laravel (EM OUTRO TERMINAL)
php artisan serve