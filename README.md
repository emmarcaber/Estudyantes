## Estudyantes
Student Management System developed using Laravel. A web application created to demonstrate basic CRUD(Create-Read-Update-Delete) Operations.

### Development Setup
1. Clone or download this repository.
2. Open the project directory and **copy** `.env.example` to `.env` in its same directory.
3. Open cloned directory in your terminal then run the following commands in order:

   *___a.___ Install backend dependencies:*
    ```composer log
    composer install
    ```

   *___b___. Generate application key:*
    ```composer log
    php artisan key:generate
    ```

   *___c___. Spin a local dev server:*
    ```composer log
    php artisan serve
    ```

4. Access <http://localhost:8000> on your browser.
