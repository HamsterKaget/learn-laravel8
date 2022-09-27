<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WaifuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('waifu')->insert([
            [
                'waifu' => 'Miku Nakano',
                'anime' => 'gotoubun',
            ],
            [
                'waifu' => 'Nino Nakano',
                'anime' => 'gotoubun',
            ],
            [
                'waifu' => 'Itsuki Nakano',
                'anime' => 'gotoubun',
            ],
            [
                'waifu' => 'Yotsuba Nakano',
                'anime' => 'gotoubun',
            ],
            [
                'waifu' => 'Rem',
                'anime' => 'RE:ZERO',
            ],
            [
                'waifu' => 'Chizuru',
                'anime' => 'Kanokari',
            ],
            [
                'waifu' => 'Ruka',
                'anime' => 'Kanokari',
            ],
        ]);
    }
}
