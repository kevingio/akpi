<?php

use Illuminate\Database\Seeder;
use App\Models\Committee;
use App\Models\Member;
use App\Models\Position;
use App\Models\Period;

class CommitteesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Committee::truncate();
        $filePath = public_path('seeds/pengurus.csv');
        $committees = csvToArray($filePath);
        foreach ($committees as $committee) {
            if($committee !== false) {
                $member = Member::where('member_no', $committee[1])->first();
                $position = Position::where('name', $committee[3])->first();
                Committee::create([
                    'position_id' => $position->id,
                    'member_id' => $member->id,
                    'period_id' => $committee[5]
                ]);
            }
        }
    }
}
