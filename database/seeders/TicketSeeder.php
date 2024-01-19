<?php


namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;


class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->insert([
            [
                'date' => '2016-06-23',
                'price' => 23,
                'train_id' => 1,
                'ticket_type_id' =>1
            ],
            [
                'date' => '2024-10-07',
                'price' => 170,
                'train_id' => 2,
                'ticket_type_id' =>2
            ],
            [
                'date' => '2018-09-06',
                'price' => 33,
                'train_id' => 3,
                'ticket_type_id' =>3
            ]
        ]);
    }
}
