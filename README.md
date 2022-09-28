## Technologies Used
- Php 8.1
- Laravel 9
- Docker configured by laravel sail
- Mysql
- Bootstrap
- Javascript
- JQuery


## Setup
You can install the application with xamp or lamp, but since the application was developed with Laravel Sail, you can install everything using docker. 
In case you already have docker installed at your computer, you can follow those steps: 
After clone the project, run the command from on Terminal:

    ./vendor/bin/sail up -d

Run the migration command and populate your tables

    ./vendor/bin/sail php artisan migrate

    ./vendor/bin/sail php artisan db:seed

Now you're ready.
