# Learn-Livewire

Repository for me learn how to use livewire and laravel.

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Purpose

The purpose of creating this repository is to store my progress while learning to use livewire.

## Getting Started

To get started running the project locally, please follow the steps below.

First, clone the repository.

```bash
git clone git@github.com:chandraauliatama/learn-livewire.git
```

or

```bash
git clone https://github.com/chandraauliatama/learn-livewire.git
```

Then, install dependencies and fetch data to your local machine.

```bash
cd learn-livewire
composer install
npm install
npm run dev
```

Create a copy of your .env file and generate the laravel project key

```bash
cp .env.example .env
php artisan key:generate
```

Create an empty database for the application and then do configuration in your .env file

Migrate and seed the database

```bash
php artisan migrate
php artisan db:seed
```

Finally, open your browser.

## Technologies

-   **[Laravel](https://laravel.com/)**
-   **[Livewire](https://laravel-livewire.com/)**
-   **[Laravel-Breeze](https://laravel.com/docs/8.x/starter-kits#laravel-breeze)**
-   **[Tailwind CSS](https://tailwindcss.com/)**
-   **[Alpine Js](https://alpinejs.dev/)**

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
