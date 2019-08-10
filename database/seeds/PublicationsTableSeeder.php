<?php

use Illuminate\Database\Seeder;
use App\Models\Publication;

class PublicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publication::truncate();
        $filePath = public_path('seeds/penerbitan.csv');
        $publications = csvToArray($filePath);
        foreach ($publications as $publication) {
            if($publication !== false) {
                Publication::create([
                    'name' => $publication[1],
                    'description' => $publication[2],
                    'image' => ('/assets/publications/' . $publication[3]),
                    'created_at' => $publication[4]
                ]);
            }
        }
    }
}
