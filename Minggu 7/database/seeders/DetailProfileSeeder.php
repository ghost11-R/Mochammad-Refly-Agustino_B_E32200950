<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data ke table pegawai

        DB::table('detail_profile')->insert([
            'address' => 'Lumajang',
            'nomor_tlp' => '087811359972',
            'ttl' => '2001-08-11',
            'foto' => 'picture.png',
        ]);
    }
}
