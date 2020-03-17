## Requirements
This project built using **laravel 7.0**, so your php version must be >= **7.0**


## Packages i used
-to install Google API Service Client Via Composer
      `composer require google/apiclient`
      
-to install FlySystem Adapter for Google Drive
       `composer require nao-pon/flysystem-google-drive`
       
       `composer require league/flysystem-aws-s3-v3`

This project built using **laravel 7.0**, so your php version must be >= **7.0**


## Installation
1. Clone the source code. `git clone https://github.com/embabby/google_drive.git`
2. Go to inside the project. `cd google_drive`
3. Run `composer install` to install all the dependencies.
4. Copy configrations file. `cp .env.example .env`
5. Create a new database.
6. Open .env file and set database configrations
```php
      DB_DATABASE= YOUR_DATABASE_NAME_HERE
      DB_USERNAME= YOUR_USERNAME_HERE
      DB_PASSWORD= YOUR_PASSWORD_HERE
```
7. Migrate the tables `php artisan migrate`
8. seed the data and to get the files from my google drive `php artisan db:seed` 
9. Generate new key `php artisan key:generate`
10. Run the project! `php artisan serve`

Note: at the beginning i made a seeder to retrive the files from google drive
