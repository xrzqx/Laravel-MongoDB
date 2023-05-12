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
        'dsn' => env('DB_URI', 'mongodb+srv://username:password@<atlas-cluster-uri>/myappdb?retryWrites=true&w=majority'),
        'database' => 'myappdb',
],
```
