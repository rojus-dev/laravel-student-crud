<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vartotoja;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CitySeeder::class,
            StudentSeeder::class,
        ]);

        Vartotoja::create([
            'vardas' => 'Jonas',
            'pavarde' => 'Jonaitis',
            'telefonas' => '+37061234567',
            'gim_data' => '2003-05-14'
        ]);

        Vartotoja::create([
            'vardas' => 'Petras',
            'pavarde' => 'Petraitis',
            'telefonas' => '+37069876543',
            'gim_data' => '2002-11-21'
        ]);

        Vartotoja::create([
            'vardas' => 'Ona',
            'pavarde' => 'Onaitė',
            'telefonas' => '+37060000000',
            'gim_data' => '2004-02-10'
        ]);
    }
}