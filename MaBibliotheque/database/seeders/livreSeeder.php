<?php

namespace Database\Seeders;

use App\Models\livre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class livreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (livre::count() == 0) {
            livre::factory(50)->create();
        }
    }
}
