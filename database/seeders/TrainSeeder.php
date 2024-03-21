<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen(__DIR__ . "/../csv/train.csv","r");

        $first_line = true;
        while (!feof($file)) {
            $train_data = fgetcsv($file);
            if (!$first_line) {
                $train = new Train;

                $train->cod_train = $train_data[0];
                $train->agency = $train_data[1];
                $train->number_carrieges = $train_data[2];
                $train->departe_station = $train_data[3];
                $train->departe_date = $train_data[4];
                $train->arrive_station = $train_data[5];
                $train->arrive_date = $train_data[6];
                $train->delay = $train_data[7];
                $train->canceled = $train_data[8];
                $train->type = $train_data[9];
                $train->changes = $train_data[10];
                
                $train->save();
            }

            $first_line = false;
        }
    }
}