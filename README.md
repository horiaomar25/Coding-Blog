# Coding-Blog
100DaysOfCode Blog Site
Overview
This project is a CRUD (Create, Read, Update, Delete) application developed using Laravel and MySQL. It serves as a blog site specifically designed for participants of the #100DaysOfCode challenge.

Features
Create: Users can create new blog posts.
Read: Users can view existing blog posts.
Update: Users can edit and update their blog posts.
Delete: Users can delete their blog posts.
Technologies Used
Backend: Laravel
Database: MySQL
Frontend: HTML, CSS (Bootstrap)
Others: PHP, Blade Templating Engine
Setup Instructions
Follow these steps to set up and run the project locally:

Clone the repository:

bash
Copy code
git clone <repository_url>
cd 100daysofcode-blog
Install dependencies:

bash
Copy code
composer install
Copy the example environment file:

bash
Copy code
cp .env.example .env
Generate application key:

bash
Copy code
php artisan key:generate
Configure the database:

Open .env file and set up your MySQL database credentials:
dotenv
Copy code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
Run migrations and seeders:

bash
Copy code
php artisan migrate --seed
Start the development server:

bash
Copy code
php artisan serve
Access the application:
Open your web browser and visit http://localhost:8000 to view the application.

What I Learned
As a first-time user of Laravel, developing this project taught me several key concepts and skills:

Routing: Understanding and defining routes for different CRUD operations.
Controllers: Creating controllers to handle business logic and interactions with models.
Views: Using Blade templating engine to create dynamic and reusable views.
Database Management: Working with migrations and seeders to set up and populate the database.
Authentication: Implementing basic authentication features for user management.
Form Handling: Validating user input and handling form submissions securely.
Deployment: Basic steps for deploying a Laravel application to a web server.
Future Improvements
Implementing advanced features like user comments, categories, or tags for blog posts.
Enhancing the frontend design and user interface.
Optimizing database queries and performance.
Adding more robust error handling and validation.
