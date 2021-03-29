<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Repository;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Repository::factory(40)->create();
    }
}
