# Laravel repository to practice

## Installation guide

1. Clone the repository: `git clone git@github.com:Carlossh2200/Playlists-Laravel.git`
2. Move to the project folder `cd Playlists-laravel/`
3. Install the composer dependencies: `composer install`
4. Create the `.env` file copying the `.env.example`: `cp .env.example .env`
5. Generate the app key: `php artisan key:generate`
6. Check and configure the environment variables for database connection in the `.env` file.
7. Run database migrations: `php artisan migrate`