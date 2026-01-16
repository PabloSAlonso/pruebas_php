<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CancionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {
        DB::table('cancions')->insert([
            'titulo' => 'OK',
            'album' => 'Zeit',
            'grupo' => 'Rammstein',
            'anio' => '2021',
            // 'created_at' => now()
        ]);
        DB::table('cancions')->insert([
            'titulo' => 'NO',
            'album' => 'AAA',
            'grupo' => 'AAA',
            'anio' => '2022'
        ]);
        DB::table('cancions')->insert([
            'titulo' => 'YES',
            'album' => 'BBB',
            'grupo' => 'BBB',
            'anio' => '2023'
        ]);
    }
}

//Solo hay que hacer un insert
// DB::table('cancions')->insert([
//     [
//         'titulo' => 'OK',
//         'grupo' => 'Rammstein',
//         'album' => 'Zeit',
//         'anio' => '2021'
//     ],
//     [
//         'titulo' => 'Fear of the dark',
//         'grupo' => 'Iron Maiden',
//         'album' => 'Fear of the dark',
//         'anio' => '1990'
//     ],
//     [
//         'titulo' => 'Taurus',
//         'grupo' => 'MikeOldfield',
//         'album' => 'Crises',
//         'anio' => '1986'
//     ]
// ]);
