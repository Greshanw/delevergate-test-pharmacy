# delevergate-test-pharmacy
This project is made for an interview test

To run the project

1. Clone the repository

2. Go to the pharmacy directory
 ```
cd pharmacy
 ```
3. Installs the project dependencies from the composer
```
composer install
```
4. Generate .env file as .env.example

On linux environment
```
cp .env.example .env
```
On windows
```
copy .env.example .env
```
5. Set the application key
```
php artisan key:generate
```
6. Run the laravel project
 ```
php artisan serve
 ```


Login credential


Owner:
  username: owner
  password: owner123
  
Manager:
  username: manager
  password: manager123

Cashier:
  username: cashier
  password: cashier123
