<?php

use Illuminate\Database\Seeder;
use App\Models\Quote;

class QuotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quote::truncate();
        $filePath = public_path('seeds/quote.csv');
        $quotes = csvToArray($filePath);
        foreach ($quotes as $quote) {
            if($quote !== false) {
                Quote::create([
                    'author' => $quote[2],
                    'image' => ('/assets/quotes/' . $quote[3]),
                    'created_at' => $quote[4]
                ]);
            }
        }
    }
}
