<?php




namespace Database\Seeders;




use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;




class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trains')->insert([
            [
                'name' => 'Polaris expres',
                'passengers' => 450,
                'year' => 2019,
                'train_type_id' => 1
            ],
            [
                'name' => 'Ovni 3000',
                'passengers' => 1500,
                'year' => 2022,
                'train_type_id' => 2
            ],
            [
                'name' => 'Renfe',
                'passengers' => 200,
                'year' => 2021,
                'train_type_id' => 3
            ]
        ]);
    }
}