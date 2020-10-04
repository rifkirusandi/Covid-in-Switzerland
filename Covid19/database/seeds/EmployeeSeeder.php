<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('employees')->insert([
              'employees_id'=>4,
              'employees_name' => 'Rusandi Muhammad Rifki',
              'role' => 'Project Leader',
              'contact' => '081345678901',
              'address' => 'Jakarta',
          ]);
    }
}
