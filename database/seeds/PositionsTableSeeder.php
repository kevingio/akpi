<?php

use Illuminate\Database\Seeder;
use App\Models\Position;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = [
            [
                'name' => 'Ketua',
                'weight' => 1
            ],
            [
                'name' => 'Wakil Ketua',
                'weight' => 2
            ],
            [
                'name' => 'Sekretaris',
                'weight' => 3
            ],
            [
                'name' => 'Wakil Sekretaris',
                'weight' => 4
            ],
            [
                'name' => 'Bendahara',
                'weight' => 5
            ],
            [
                'name' => 'Wakil Bendahara',
                'weight' => 6
            ],
            [
                'name' => 'Koordinator Wilayah',
                'weight' => 10
            ],
            [
                'name' => 'Direktur Eksekutif',
                'weight' => 100
            ],
        ];
        Position::truncate();
        foreach ($positions as $position) {
            Position::create($position);
        }
    }
}
