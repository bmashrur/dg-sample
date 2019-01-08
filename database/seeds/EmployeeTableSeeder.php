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

        $EmployeeData = [];

        for($i = 0; $i <= 1000; $i++) {

            $EmployeeData[($i + 1)] = [
                'name'          => 'Bari' . ($i + 1),
                'designation'   => 'SE' . ($i + 1),
                'reports_to'    => count($EmployeeData) == 0 ? 0 : array_rand($EmployeeData),
                'created_at'    => \Carbon\Carbon::now()
            ];
        }

        Employee::insert($EmployeeData);

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
