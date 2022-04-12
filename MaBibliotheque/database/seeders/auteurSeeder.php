<?php

namespace Database\Seeders;

use App\Models\auteur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class auteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (auteur::count() == 0) {
            auteur::factory(50)->create();
        }
    }
}
