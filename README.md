# PHP User Authentication

This repository contains a basic PHP user authentication system. It demonstrates essential functionalities such as user registration, login, password hashing, and session management using PHP and MySQL.

## Features

- **User Registration:** Securely register new users.
- **User Login:** Authenticate users with email and password.
- **Password Hashing:** Secure passwords using PHP's password hashing functions.
- **Session Management:** Manage user sessions to keep users logged in.
- **Logout:** Allows users to securely log out.

## Prerequisites

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache or Nginx server
- Composer (for dependency management)

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/KabriAcid/php-user-auth.git
    ```

2. **Navigate to the project directory:**

    ```bash
    cd php-user-auth
    ```

3. **Install dependencies:**

    ```bash
    composer install
    ```

4. **Configure the environment:**

    - Copy `.env.example` to `.env`.
    - Update the `.env` file with your database credentials and other necessary configurations.

5. **Run database migrations:**

    ```bash
    php artisan migrate
    ```

6. **Serve the application:**

    ```bash
    php artisan serve
    ```

## Usage

- **Register a new user:** Visit `/register` to create a new account.
- **Login:** Visit `/login` to access the login page.
- **Logout:** Click the logout link to end the session.

## Contributing

Contributions are welcome! Please fork this repository and submit a pull request for any improvements or new features.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact

For any inquiries, please contact [KabriAcid](mailto:kabriacid01@gmail.com).

---

*This project is maintained by [KabriAcid](https://github.com/KabriAcid).*
