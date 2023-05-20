<?php

namespace Database\Seeders;

use App\Models\Tamu;
use Illuminate\Database\Seeder;

class TamuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tamu::create([
            'nama' => 'rizal',
            'alamat' => 'pragaan',
            'nope' => '1234567890',
            'keperluan' => 'ngegame',
            'data' => 'pubg',
        ]);
    }
}
