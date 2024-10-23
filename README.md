# Work Digital

## SetUp

1. cp .env.example .env
2. composer install
3. php artisan key:generate
4. php artisan migrate
5. php artisan db:seed
6. php artisan serve

## Coding challenge

The project has one API endpoint that returns a list of products. The endpoint is located at `localhost:8000/api/products`.

The specific tasks will be discussed in the meeting.

2.1 Adjust the api so that query params can be used to limit & offset the products
2.1.1 Adjust test to validate if changes are working
2.2. Add the Post endpoint to the API to create Products.
