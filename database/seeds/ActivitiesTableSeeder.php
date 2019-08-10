<?php

use Illuminate\Database\Seeder;
use App\Models\Activity;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activity::truncate();
        $filePath = public_path('seeds/kegiatan.csv');
        $activities = csvToArray($filePath);
        foreach ($activities as $activity) {
            if($activity !== false) {
                Activity::create([
                    'name' => $activity[1],
                    'description' => $activity[2],
                    'image' => ('/assets/activites/' . $activity[3]),
                    'created_at' => $activity[4]
                ]);
            }
        }
    }
}
