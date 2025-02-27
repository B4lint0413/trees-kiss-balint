<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("counties")->insert([
            ['id' => 1,'name' => 'Bács-Kiskun'],
            ['id' => 2,'name' => 'Baranya'],
            ['id' => 3,'name' => 'Békés'],
            ['id' => 4,'name' => 'Borsod-Abaúj-Zemplén'],
            ['id' => 5,'name' => 'Csongrád'],
            ['id' => 6,'name' => 'Fejér'],
            ['id' => 7,'name' => 'Győr-Moson-Sopron'],
            ['id' => 8,'name' => 'Hajdú-Bihar'],
            ['id' => 9,'name' => 'Heves'],
            ['id' => 10,'name' => 'Jász-Nagykun-Szolnok'],
            ['id' => 11,'name' => 'Komárom-Esztergom'],
            ['id' => 12,'name' => 'Nógrád'],
            ['id' => 13,'name' => 'Pest'],
            ['id' => 14,'name' => 'Somogy'],
            ['id' => 15,'name' => 'Szabolcs-Szatmár-Bereg'],
            ['id' => 16,'name' => 'Tolna'],
            ['id' => 17,'name' => 'Vas'],
            ['id' => 18,'name' => 'Veszprém'],
            ['id' => 19,'name' => 'Zala'],
        ]);
    }
}
