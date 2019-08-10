<?php

use Illuminate\Database\Seeder;
use App\Models\Period;

class PeriodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $periods = [
            [
                'start' => '2012',
                'end' => '2017'
            ],
            [
                'start' => '2017',
                'end' => '2022'
            ]
        ];
        Period::truncate();
        foreach ($periods as $period) {
            Period::create($period);
        }
    }
}
