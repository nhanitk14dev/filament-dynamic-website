# Laravel

The Laravel framework is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in most web projects, such as authentication, routing, sessions, and caching.

## I. Requirements

- PHP >= 8.2
- Composer
- A database (MySQL, PostgreSQL, SQLite, etc.)
- Livewire

## II. Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/nhanitk14dev/filament-dynamic-website.git
    ```

2. Navigate to your project folder:
    ```bash
    cd filament-dynamic-website
    ```

3. Install dependencies using Composer:
    ```bash
    composer install
    ```

4. Set up your `.env` file:
    ```bash
    cp .env.example .env
    ```

5. Laravel uses SQLite as the default database. You can also switch to MySQL if needed.

   5.1 Confirm the SQLite DB Location in `.env` file:
    ```text
    DB_CONNECTION=sqlite
    ```

   5.2 Use a SQLite Viewer (UI)

   - **Option 1: DB Browser for SQLite (Recommended)**
     - Download: [https://sqlitebrowser.org](https://sqlitebrowser.org)
     - Open the `database.sqlite` file directly.
     - You can browse tables, run SQL queries, and edit data.

   - **Option 2: VS Code Extension (Recommended)**
     - 🔍 Search for **SQLite Viewer** or **SQLTools** in VS Code Extensions
     - Open the `.sqlite` file directly in VS Code.
     - Or use the **SQLTools** extension to connect and browse the SQLite database.

6. Generate the application key:
    ```bash
    php artisan key:generate
    ```

7. Run migrations to set up your database:
    ```bash
    php artisan migrate
    ```

8. Serve the application:
    ```bash
    php artisan serve
    ```

Now you can open your browser and visit `http://127.0.0.1:8000`.

---

## III. Installing Filament Admin Panel

1. To install **Filament v3**, follow the official documentation [FilamantV3](https://filamentphp.com/docs/3.x/panels/installation) or run the following commands:

    ```bash
    composer require filament/filament:"^3.3" -W
    php artisan filament:install --panels
    ```

2. Create a user for accessing the Filament panel:
    ```bash
    php artisan make:filament-user
    ```

   Example user details:
    ```
    Email: admin@dev.com
    Password: Admin@dev
    ```
    - **Domain-Based Access Control** for the Filament admin panel:

   The `config/filament.php` file with the allowed email domains, and The `canAccessPanel` method in your `User.php` model will check the email domain and ensure the user has a verified email before granting access

      ```php
      // config/filament.php
      return [
          'allowed_email_domains' => [
              '@gmail.com',
              '@yopmail.com',
              '@vn.com',  // Example for company email domain
          ],
      ];
      ```
3. Open `/admin` in your web browser, sign in with the credentials, and start building your app!

---

## IV. Improving Filament Panel Performance

For better performance of the Filament admin panel, run the following commands:

- To optimize the panel by caching Blade views, icons, and components:
    ```bash
    php artisan filament:optimize
    ```

- To clear the cache:
    ```bash
    php artisan filament:optimize-clear
    ```

---

## IV. License

The Laravel framework is open-sourced software licensed under the MIT license.
