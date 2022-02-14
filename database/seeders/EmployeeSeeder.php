<?php

namespace Database\Seeders;

use App\Models\Employee;
use Faker\Factory;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{

    public function run()
    {
        Employee::factory()->count(25)->create();    
    }
}
