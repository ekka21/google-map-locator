# Google Map Locator!
The purpose of this project is to learn how to build a RESTFULL app
using Laravel and VueJS.

So here we go...

## Steps

### Builidng Backend (Laravel)
- Let's create DB migration
```
php artisan make:migration create_dealers_table --create=dealers
php artisan migrate
php artisan migrate:rollback
php artisan db:seed
php artisan migrate --seed
```
- Need to create dealer model ```php artisan make:model Dealer```
- And some fake data to work with using Faker ```php artisan make:seeder DealersTableSeeder```
- Create a list of dealers page that displays id, name, address, zip,
   and status
``` php artisan make:controller DealerController --resource```
- Create a new dealer page so that an user can add a new dealer
- Create an edit dealer page so that an user can edit an existed dealer

