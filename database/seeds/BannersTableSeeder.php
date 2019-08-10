<?php

use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::truncate();
        $filePath = public_path('seeds/slideshow.csv');
        $banners = csvToArray($filePath);
        foreach ($banners as $banner) {
            if($banner !== false) {
                Banner::create([
                    'title' => $banner[1],
                    'path' => ('/assets/banners/' . $banner[2]),
                    'created_at' => $banner[3]
                ]);
            }
        }
    }
}
