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
        // insert data ke table pegawai
        DB::table('detail_profile')->insert([
            'address' => 'Tuban',
            'nomor_tlp' => '085854312367',
            'ttl' => '2001-03-07',
            'foto' => 'picture.png'
        ]);
    }
}
