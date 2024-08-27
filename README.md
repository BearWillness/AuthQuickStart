# User Authentication System

This is a simple user login and registration system built with PHP and MySQL. It includes the following features:
- User registration with basic validation
- User login with session management
- Basic protection of routes (e.g., a `dashboard.php` page accessible only when logged in)
- Logout functionality

## Features

- **Register:** Users can create an account by providing a username, email, and password.
- **Login:** Registered users can log in to access the protected content.
- **Dashboard:** A protected page accessible only to logged-in users.
- **Logout:** Users can log out, which ends their session.

## Requirements

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (e.g., Apache, Nginx, etc.)

## Installation

Follow the steps below to set up and run the project on your local machine.

### 1. Clone the Repository

```bash
git clone https://github.com/bearwillness/authquickstart.git
cd authquickstart
```

### 2. Set Up the Database

1. Log in to your MySQL server:

    ```bash
    mysql -u root -p
    ```

2. Create the database and tables by running the following SQL script:

    ```sql
    CREATE DATABASE IF NOT EXISTS user_auth;

    USE user_auth;

    CREATE TABLE IF NOT EXISTS users (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        email VARCHAR(100) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ```

### 3. Configure the Database Connection

1. Open the `config.php` file in the project root.
2. Update the following variables with your MySQL credentials:

    ```php
    $servername = "localhost"; /* usually "localhost" */
    $username = "your_mysql_username"; /* e.g., "root" */
    $password = "your_mysql_password"; /* your MySQL password */
    $database = "user_auth"; /* name of the database */
    ```

### 4. Start the Development Server

You can start the built-in PHP server from your project directory:

```bash
php -S localhost:8000
```

### 5. Access the Application

Open your web browser and navigate to `http://localhost:8000` to view the application.

### 6. Use the Application

- **Register**: Go to `http://localhost:8000/register.php` to create a new user account.
- **Login**: Go to `http://localhost:8000/login.php` to log in with your credentials.
- **Dashboard**: Once logged in, you can access the dashboard at `http://localhost:8000/dashboard.php`.
- **Logout**: Use the "Logout" button on the dashboard to log out of your session.

## Project Structure

- `config.php`: Database connection settings and session management.
- `register.php`: User registration page.
- `login.php`: User login page.
- `index.php`: Main landing page with dynamic content based on login status.
- `dashboard.php`: Protected page accessible only to logged-in users.
- `logout.php`: Ends the user session and redirects to the homepage.

## Contributing

If you wish to contribute, feel free to open a pull request or issue on the [GitHub repository](https://github.com/bearwillness/authquickstart.git).

