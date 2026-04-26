<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grupe;

class GrupeSeeder extends Seeder
{
    public function run(): void
    {
        Grupe::create(['kodas' => 'PS24', 'pavadinimas' => 'Programų sistemos']);
        Grupe::create(['kodas' => 'IST24', 'pavadinimas' => 'Informacinės sistemos']);
        Grupe::create(['kodas' => 'ATE24', 'pavadinimas' => 'Automobilių techninis eksploatavimas']);
    }
}