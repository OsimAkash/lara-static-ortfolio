How to run?  


After Cloning the repository go to project directory

git clone project (copy) link

cd lara-static-portfolio

Install all dependency

composer install

Make a copy of .env

cp .env.example .env

Migrate the database for session management

php artisan migrate

Generate app key

php artisan key:generate

Serve the application

php artisan serve
