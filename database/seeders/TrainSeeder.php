<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Train;


class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $train = new Train();

        $train->company = 'Italo';
        $train->departure_station = 'Milano';
        $train->arrival_station = 'Verbania';
        $train->departure_time = '18:00:00';
        $train->arrival_time = '19:30:00';
        $train->code = 'AB1234';
        $train->carriages_num = 8;
        $train->on_time = false;
        $train->canceled = false;

        $train->save();

        //    dd($train);
    }
}
