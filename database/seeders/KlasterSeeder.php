<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KlasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('klasters')->insert([
            ['id'=>1,'name'=>'"Khiva Silk Fabric" МЧЖ'],
            ['id'=>2,'name'=>'"Xorazm Pilla Xolding" МЧЖ'],
            ['id'=>3,'name'=>'"Bog\'ot Silk CO" МЧЖ'],
            ['id'=>4,'name'=>'"Shovot Silk" МЧЖ'],
        ]);
    }
}
