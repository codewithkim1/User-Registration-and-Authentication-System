# User Registration and Authentication System

This project is a simple user registration and authentication system using PHP and MySQL. It allows users to register, log in, and update their profile information. Additionally, it includes an email verification process to ensure user account security.

## Table of Contents

- [User Registration and Authentication System](#user-registration-and-authentication-system)
  - [Table of Contents](#table-of-contents)
  - [Features](#features)
  - [Installation](#installation)
  - [Usage](#usage)
  - [Project Structure](#project-structure)
  - [Security Considerations](#security-considerations)
  - [Contributing](#contributing)
  - [License](#license)

## Features

1. **User Registration**: Users can register by providing a username, email, and password.

2. **Email Verification**: An email containing a verification code is sent to the user for account verification.

3. **User Login**: Registered users can log in using their email and password.

4. **Profile Page**: Once logged in, users can view their profile details and update their full name and phone number.

5. **MySQL Database**: User data is stored in a MySQL database with appropriate table structure.

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/codwithkim1/user-registration-authentication.git
    ```

2. Import the SQL file (`db.sql`) into your MySQL database to create the necessary database and table.

3. Update the database connection details in `register.php` and `verify.php`:

    ```php
    $mysqli = new mysqli("your_host", "your_username", "your_password", "your_database");
    ```

4. Install PHPMailer library using Composer:

    ```bash
    composer install
    ```

5. Configure SMTP settings in `register.php` for email verification.

## Usage

1. Open `index.php` in your web browser to access the registration form.

2. After registration, check your email for the verification code.

3. Click on the verification link in the email to activate your account.

4. Log in using your registered email and password in `login.php`.

5. After login, you will be redirected to your profile page (`profile.php`), where you can view and update your profile information.

## Project Structure

- **index.php**: User registration form.
- **login.php**: User login form.
- **profile.php**: User profile page with update functionality.
- **verify.php**: Handles email verification.
- **register.php**: Processes registration form and sends verification email.
- **db.sql**: SQL script for database and table creation.

## Security Considerations

- Use prepared statements to prevent SQL injection.
- Ensure proper password hashing and verification.
- Configure SMTP settings securely for email functionality.
- Implement session handling securely.
- Regularly update dependencies and follow best practices for web application security.

## Contributing

Contributions are welcome! Feel free to open issues or submit pull requests to improve the project.

## License

This project is licensed under the [MIT License](LICENSE).
