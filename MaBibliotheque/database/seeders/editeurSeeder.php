<?php

namespace Database\Seeders;

use App\Models\editeur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class editeurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (editeur::count() == 0) {
            editeur::factory(50)->create();
        }
    }
}
