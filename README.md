# CRUD API Laravel

## Description

This project is a CRUD API developed with the **Laravel** framework. It allows performing Create, Read, Update, and Delete operations on "Users" resources in a database.

## Features

- **Laravel 8.x**
- **Eloquent ORM** for database interaction.
- **RESTful API** for CRUD operations.
- **Authentication and Authorization** using JWT.
- **Data Validation** in requests.
- **Testing** with PHPUnit.

## Requirements

- **PHP >= 8.0**
- **Composer**
- **MySQL** or **SQLite**
- **Git**

## Installation

### 1. Clone the Repository

```bash
git clone https://github.com/Fredy002/crud-api-laravel.git
cd crud-api-laravel
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Configure the `.env` File

Copy the `.env.example` file to `.env` and configure the environment variables according to your local setup.

```bash
cp .env.example .env
```

### 4. Generate the Application Key

```bash
php artisan key:generate
```

### 5. Configure the Database

Edit the `.env` file to set up your database connection. For example, for MySQL:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=formulario_personas
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Run Migrations

```bash
php artisan migrate
```

### 7. Start the Development Server

```bash
php artisan serve
```

The API will be available at `http://localhost:8000`.

## Usage

You can interact with the API using tools like **Postman** or **cURL**. Below are some example endpoints:

- **GET /api/users**: Retrieve all users.
- **GET /api/users/{id}**: Retrieve a specific user.
- **POST /api/users**: Create a new user.
- **PUT /api/users/{id}**: Update an existing user.
- **DELETE /api/users/{id}**: Delete a user.

## Contribution

Contributions are welcome! Please open an issue or a pull request to discuss changes.

## License

This project is licensed under the [MIT License](LICENSE).

## Contact

- **GitHub:** [Fredy002](https://github.com/Fredy002)
- **LinkedIn:** [Fredy Antonio Almeyda Alania](https://www.linkedin.com/in/fredy-antonio-almeyda-alania/)

Feel free to explore the code to understand how the API functionalities are implemented and maybe tweak some values to see how the application behaves. Happy coding!
