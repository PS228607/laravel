<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AlbumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            'name' => 'Album1',
            'year' => '2022',
            'times_sold' => '1', 
            'band_id' => '1',
        ]);

        DB::table('albums')->insert([
            'name' => 'Album2',
            'year' => '2022',
            'times_sold' => '2', 
            'band_id' => '2',
        ]);

        DB::table('albums')->insert([
            'name' => 'Album3',
            'year' => '2022',
            'times_sold' => '3', 
            'band_id' => '1',
        ]);

        DB::table('albums')->insert([
            'name' => 'Album4',
            'year' => '2022',
            'times_sold' => '4', 
            'band_id' => '1',
        ]);

        DB::table('albums')->insert([
            'name' => 'Album5',
            'year' => '2022',
            'times_sold' => '5', 
            'band_id' => '1',
        ]);
    }
}
