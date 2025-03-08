# Laravel Country, State, and LGA Seeders

This repository contains Laravel seeders for inserting countries, states, and local government areas (LGAs) into the database. It provides a structured way to populate these tables with relevant data.

## Installation and Usage

Follow these steps to use and customize the seeders in your Laravel project:

### 1. Clone the Repository

You can copy the seeders manually or clone this repository into your Laravel project.

```bash
git clone https://github.com/rersheed/Laravel-Seeder-Countries-Nigerian-States-and-LGAs-.git

Then, move the seeder files to your Laravel database seeders directory:

```bash
mv Laravel-Seeder-Countries-Nigerian-States-and-LGAs-/database/seeders/* database/seeders/

Alternatively, you can manually copy and paste the CountrySeeder.php, StateSeeder.php, and LgaSeeder.php into database/seeders/.

Then, run the seeders:
```bash
php artisan db:seed --class=CountrySeeder
php artisan db:seed --class=StateSeeder
php artisan db:seed --class=LgaSeeder
