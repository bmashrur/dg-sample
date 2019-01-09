### Installation

Please follow the instructions below

* Clone the repository using `git clone https://github.com/mashb16/dg-sample.git`
* Create `.env` by copying the `env.example` file
* `composer install`
* `npm install`
* `php artisan key:generate`
* `php artisan migrate`
* within EmployeeTableSeeder class change the limit as per your requirement
* `php artisan db:seed`

### Performance measure

* when tested with 10 records - `0.015 seconds`
* when tested with 100 records - `0.065 seconds`
* when tested with 1000 records - `1.01 seconds`
* when tested with 10000 records - `33.72 seconds`

>  This performance measure is only true in the case when there are maximum number of employees reporting to another employee
