# Laravel 5.5 Frontend Scaffolding for Bootstrap v4.0.0-beta

*Currently*: **Bootstrap v4.0.0-beta**

## Usage:
1. Clean install of Laravel 5.5.x then `cd` to app root folder in your terminal.
2. Run `composer require sitesense/l55bs4`.
3. Use `php artisan preset l55bs4` for basic Bootstrap 4 preset. **OR** `php artisan preset l55bs4-auth` for Bootstrap 4, Auth routes and Auth views. **NOTE**: Be sure to clean up duplicate Auth routes in `routes/web.php` if you use this command more than once.
4. Run `npm install` 
5. Run `npm run dev`
6. Configure your database access in .env
7. Run `php artisan migrate` to create standard Laravel user tables.
8. You're done, use your web browser to navigate to your app as usual.
