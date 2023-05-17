# Laravel-MongoDB
## Running Laravel with MonggoDB
for following this step you need instal [PHP](https://www.php.net/manual/en/install.php) and [Composer](https://getcomposer.org/download/) on your machine

Step 1: Installing your database server to run in your local machine
- https://www.mongodb.com/docs/v4.2/administration/install-community/

Step 2: Installing the MongoDB PHP Driver
- https://www.php.net/manual/en/mongodb.installation.windows.php
- https://www.mongodb.com/docs/php-library/current/tutorial/install-php-library/

Step 3: Installing MongoDB package for Laravel
- run the following command from your Laravel project directory in order to add the MongoDB package for Laravel:

```
composer require jenssegers/mongodb
```

Step 4: Configuring Your Laravel Project to Use MongoDB
- In order for Laravel to communicate with your MongoDB database, you will need to add your database connection information to the `config\database.php` file under the “connections” object in your Laravel project as shown in this example:
```
'connections' => [
  'mongodb' => [
            'driver' => 'mongodb',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', 27017),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', ''),
            'password' => env('DB_PASSWORD', ''),
            'options' => [
            ],
        ],
```
- Setup your .env in your Laravel project as shown in this example:
```
DB_CONNECTION=mongodb
DB_HOST=127.0.0.1
DB_PORT=27017
DB_DATABASE=laravel
DB_USERNAME=
DB_PASSWORD=
```
Step 5: Installing and set up JWT
- To create the User table, use the following command:
```
php artisan migrate
```
- Now that our database is set up, we’ll install and set up the Laravel JWT authentication package:
```
 composer require php-open-source-saver/jwt-auth
```
- Copy the JWT configuration file from the vendor to confi/jwt.php with this command:
```
php artisan vendor:publish --provider="PHPOpenSourceSaver\JWTAuth\Providers\LaravelServiceProvider"
```
- we need to generate a secret key to handle the token encryption. To do so, run this command:
```
php artisan jwt:secret
```
