<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
/**
 * Class EmployeeTableSeeder
 */
class UserTableSeeder extends Seeder
{
    private $limit;

    public function __construct()
    {
        $this->limit = 10;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::truncate();

        $users = [
            [
                'name'              => 'mashb',
                'email'             => 'admin@admin.com',
                'password'          => bcrypt('1234'),
                'email_verified_at' => \Carbon\Carbon::now(),
                'remember_token'    => str_random(60),
                'created_at'        => \Carbon\Carbon::now(),
                'updated_at'        => \Carbon\Carbon::now(),
            ]
        ];

        \App\User::insert($users);

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
