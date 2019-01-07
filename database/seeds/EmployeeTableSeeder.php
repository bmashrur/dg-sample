<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use  \App\Models\Employee;
/**
 * Class EmployeeTableSeeder.
 */
class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::truncate();

        $EmployeeData = [
            [
                'name' => 'Md Mashrur',
                'designation' => 'Software Engineer',
                'report_to' => 0
            ],
            [
                'name' => 'Bari',
                'designation' => 'Software Engineer',
                'report_to' => 1
            ],
            [
                'name' => 'Sobhan',
                'designation' => 'Junior Software Engineer',
                'report_to' => 1
            ]
        ];

        Employee::insert($EmployeeData);

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
