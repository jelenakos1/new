<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schoolnew;

class SchoolnewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schoolnew::factory()->count(3)->create;
    }
}
