# Developer Blog Platform

This project is a Laravel-based blog platform designed for a programmer who shares educational content, courses, and materials with their audience.

The platform allows the author to publish articles, distribute learning materials, and showcase student projects in a structured and easy-to-navigate environment.

## Features

- Author profile page ("About the Author")
- Video course catalog
- Newsletter issues archive
- Student websites showcase
- Content management structure
- Clean and structured backend architecture

## Technology Stack

- PHP
- Laravel
- MySQL
- Blade templates
- REST-style routing

## Architecture

The application follows a typical Laravel MVC architecture:

- **Controllers** handle HTTP requests and responses
- **Models** manage data and database interaction
- **Blade views** render the frontend
- Business logic is organized to keep controllers clean and maintainable

## Purpose of the Project

This project demonstrates:

- backend structure in Laravel
- organization of business logic
- modular content management
- clean and readable code

## Installation

1. Clone the repository
2. Install dependencies
3. composer install


Create `.env` file


cp .env.example .env


4. Generate application key


php artisan key:generate


5. Run migrations


php artisan migrate


6. Start the development server


php artisan serve 
