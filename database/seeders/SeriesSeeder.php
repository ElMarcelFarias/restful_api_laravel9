<?php

namespace Database\Seeders;

use App\Models\Serie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Serie::create([
            'name' => 'Supernatural',
            'category' => 'Horror'
        ]);

        Serie::create([
            'name' => 'Game of Thrones',
            'category' => 'Suspense'
        ]);

        Serie::create([
            'name' => 'Riverdale',
            'category' => 'Teen'
        ]);
    }
}


