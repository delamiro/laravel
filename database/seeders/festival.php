<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class festival extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('festivals')->insert([
            'naam' => 'AstrumWorld',
            'adres' => 'gruttostraat 21',
            'max_mensen' => '9',
            'verkocht' => '5',
            'style' => 'indian dance fest',
            'kosten' => '999',
            'begin_datum' => '2022-8-8',
            'eind_datum' => '2022-9-9',

        ]);
    }
}
