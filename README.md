# foody

## Client Build

```bash
$ cd foody-client
# install dependencies
$ npm install

# serve with hot reload at localhost:3000
$ npm run dev

```
[localhost:3000](http://localhost:3000/).

## API Laravel Setup

```bash
$ cd foody-api
# run & build  docker 
# serve with hot reload at localhost:8080

$ docker-compose up -d --build

$ docker-compose exec laravel sh
# copy file .env.example to .env

$ cp .env.example .env
$ composer i
$ php artisan migrate:fresh --seed

```
[localhost:8080](http://localhost:8080/).
