# YUMMI PIZZA

Online Pizza delivery App.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

To clone and run this application, you'll need [git](https://git-scm.com/downloads) and [Composer](https://getcomposer.org/download/)(which comes with [XAMPP](https://www.apachefriends.org/download.html)) installed on you computer.

### Installing

From your command line
```
# Clone this repository
$ git clone https://github.com/captainamiedi/yummy_pizza_backend.git

# Go into the repository directory
$ cd yummy_pizza_backend

# Install dependencies
$ composer install

# set up your .env as seen in .env.example

# Run migrations
$ php artisan migrate

# Seed to database
$ php artisan db:seed

# run the app
$ php artisan serve

```

## API ENDPOINT
Endpoint | Functionality
-------- | -------------
POST /pizzas | create pizza
PATCH /pizzas/:id | update pizza
GET /pizza/:id | get a pizza
GET /pizzas | get all pizza
DELETE /pizzas/:id | remove a pizza


## Running the tests

* Navigate to the project root directory
* After installation
* set up .env.testing as seen in .env.testing.example
* run `vendor/bin/phpunit`

## Deployment

Yummi Pizza is hosted on
* [Heroku](https://yummi-pizza-backend.herokuapp.com/)

## Built With

* [LARAVEL](https://laravel.com/) 
* [LARAVEL-GENERATOR](https://labs.infyom.com/laravelgenerator/)

## Author
Bright Eloghene Amidiagbe

## License
MIT