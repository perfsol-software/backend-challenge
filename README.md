# Backend challenge
database UML is here: [SCHEMA:backend_ch.uml](./SCHEMA:backend_ch.uml)

## How to start
 - run `composer install`
 - up docker containers `./vendor/bin/sail up`
 - run the migrations and seed the database ` ./vendor/bin/sail artisan migrate:fresh --seed`

## API routes
GET `http://localhost/api/domains`

GET `http://localhost/api/domains/{id}/progress`
