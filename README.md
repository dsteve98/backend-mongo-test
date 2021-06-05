## backend-mongo-test

Backend REST API using Laravel 8, PHP 8, MongoDB

### Installation:
- Clone the project
- Go to the folder application using `cd` command on your cmd or terminal
- Run `composer install` on your cmd or terminal
- Copy .env.example file to .env on the root folder. You can type `copy .env.example .env` if using command prompt Windows or `cp .env.example .env` if using terminal, Ubuntu
- Run `php artisan key:generate`
- Start mongodb by run `mongod` in separate cmd or terminal (if environment variable did not added for mongodb, use `Path\to\mongod.exe`, example: `C:\Program Files\MongoDB\Server\4.4\bin\mongod.exe`)
- Run `php artisan serve`

### Several url to help test POST APIs:
- localhost:8000/mobil/add
- localhost:8000/mobil/edit/{id}
- localhost:8000/motor/add
- localhost:8000/motor/edit/{id}


API Documentation : https://documenter.getpostman.com/view/6831996/TzY4hFYi