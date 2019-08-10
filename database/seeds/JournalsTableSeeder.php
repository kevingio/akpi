<?php

use Illuminate\Database\Seeder;
use App\Models\Journal;

class JournalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Journal::truncate();
        $filePath = public_path('seeds/journal.csv');
        $journals = csvToArray($filePath);
        foreach ($journals as $journal) {
            if($journal !== false) {
                Journal::create([
                    'name' => $journal[1],
                    'journal_no' => $journal[2],
                    'abstract' => $journal[3],
                    'thumbnail' => ('/assets/journals/thumbnail/' . $journal[4]),
                    'path' => ('/assets/journals/' . $journal[5]),
                    'created_at' => $journal[6]
                ]);
            }
        }
    }
}
