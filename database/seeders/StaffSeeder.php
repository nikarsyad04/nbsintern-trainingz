<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Staff;



class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Staff::factory(10)->create();
    }
}
