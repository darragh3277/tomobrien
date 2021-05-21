## About tomobrien.ie

Small website built using laravel 5.4 to display the poetry by the late Tom O'Brien.

<a href="http://tomobrien.ie">tomobrien.ie</a>

## Running Locally

Built using Docker and Docker-Compose.

To run, clone the directory to host machine.

##### Copy .env.example file to .env

`cp .env.example .env`

Update .env database credentials

##### Build project

`docker-compose build app`

##### Run project

`docker-compose up -d`

##### Install dependencies

`docker-compose exec app composer install`

##### Generate application key

`docker-compose exec app php artisan key:generate`
