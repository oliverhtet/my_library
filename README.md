# My Library  - A Simple Laravel CRUD Application

This project demonstrates a basic CRUD (Create, Read, Update, Delete) application built with Laravel. It's designed as a simple library management system to manage books and is intended for educational purposes.

## Table of Contents

*   [Project Setup ](#project-setup)
*   [Database Setup ](#database-setup)
*   [Creating the Model ](#creating-the-model)
*   [Creating the Controller ](#creating-the-controller)
*   [Creating the Views](#creating-the-views)
*   [Defining the Routes](#defining-the-routes)
*   [Running the Application](#running-the-application)


## Project Setup <a name="project-setup"></a>

1. **Create a new Laravel project:**
   ```bash
   composer create-project --prefer-dist laravel/laravel my_library


 Project Setup 

Create a new Laravel project: composer create-project --prefer-dist laravel/laravel my_library
Navigate to the project directory: cd my_library
Configure your database connection in the .env file.
Database Setup 

Create the database in your database management system (e.g., phpMyAdmin, MySQL Workbench).
Configure database credentials in .env file.
Create the Book model and migration: php artisan make:model Book -m
Define the table structure in the migration file (as provided in the previous response).
Run the migration: php artisan migrate
Creating the Controller 

Create the BookController: php artisan make:controller BookController
Implement the index, create, and store methods (as provided in the previous response). We will add edit, update, and destroy later.
Creating the Views

Create the index.blade.php and create.blade.php files in resources/views/books (as provided in the previous response).
Defining the Routes 

Add the resource route to routes/web.php: Route::resource('books', BookController::class);
   
   
