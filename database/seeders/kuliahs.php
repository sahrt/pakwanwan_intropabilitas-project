<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kuliahs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('kuliahs')->insert([
            [
                "kodekuliah" => "00001",
                "namakuliah" => "00002",
                "pengajar" => "Drs. Wahyu,Mpd.Spd" 

            ]
        ]);
    }
}
