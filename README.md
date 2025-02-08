# My Library (ကျွန်ုပ်၏စာကြည့်တိုက်) - A Simple Laravel CRUD Application

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
   cd /my_library

Database Setup (ဒေတာဘေ့စ် တည်ဆောက်ခြင်း) <a name="database-setup"></a>
Create the database:

Open your preferred database management tool (e.g., phpMyAdmin, MySQL Workbench, DataGrip, etc.).
Create a new, empty database.
Choose a descriptive name (e.g., my_library).
Configure database credentials:

Open the .env file located in the root directory of your Laravel project.
Locate the database connection settings (usually starting with DB_).
Update the values with your database credentials:
DB_CONNECTION=mysql # The type of database you're using (mysql, pgsql, sqlite, etc.)
DB_HOST=127.0.0.1  # Usually localhost (for development)
DB_PORT=3306      # The port your database server is listening on (default MySQL port is 3306)
DB_DATABASE=my_library  # The name of the database you created
DB_USERNAME=your_db_username # Your database username
DB_PASSWORD=your_db_password # Your database password
   
