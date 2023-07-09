<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kucing_models extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kucing_models')->insert([
             "nama" => "blacky",
             "umur" => "12",
             "jenis" => "Anggora",
             "harga" => 1300000,
             "stock" => 12
        ]);
    }
}
