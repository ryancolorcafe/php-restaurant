# _PHP Cuisine Database Practice_

#### _Matches local resturants to types of cuisines here in PDX_ _2/24/2015_

### By _**Ryan Brown & Alexander Fallenstedt**_

## Description

This web app is designed to link cuisines to resturants in pdx. The app was built using the micro-framework Silex, as well as Bootstrap...

The goal of this project was to...

## Setup/Installation Requirements

1. Fork and clone this repository from_ [gitHub](https://github.com/Fallenstedt/THERESTOFTHELINK).
2. Navigate to the root directory of the project in which ever CLI shell you are using and run the command: __composer install__ .


3. `CREATE TABLE cuisines (name varchar (255), id serial PRIMARY KEY);`
4. `CREATE TABLE resturants (description varchar (255), id serial PRIMARY KEY, category_id INT);`



3. Create a local server in the /web directory within the project folder using the command: __php -S localhost:8000__ (assuming you are using a mac).
4. Open the directory http://localhost:8000 in any standard web browser.

## Known Bugs

_No Known Bugs at this Time._

## Support and contact details

If you have any questions, concerns, or feedback, please contact the author through [gitHub](https://github.com/Fallenstedt/php-code-review-2).

## Technologies Used

This web application was created using the_  [Silex micro-framework](http://silex.sensiolabs.org/)_, as well_ [Twig](http://twig.sensiolabs.org/)_, a template engine for php.

Javascript? with Chai/Mocha for testing?

### License

_MIT License._

_Copyright (c) 2016_ **Alexander Fallenstedt**
