<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            ['id'=>1,'name'=>'Урганч'],
            ['id'=>2,'name'=>'Боғот'],
            ['id'=>3,'name'=>'Гурлан'],
            ['id'=>4,'name'=>'Қўшкўпир'],
            ['id'=>5,'name'=>'Хазорасп'],
            ['id'=>6,'name'=>'Хива'],
            ['id'=>7,'name'=>'Хонқа'],
            ['id'=>8,'name'=>'Шовот'],
            ['id'=>9,'name'=>'Янгиариқ'],
            ['id'=>10,'name'=>'Янгибозор'],
        ]);
    }
}
