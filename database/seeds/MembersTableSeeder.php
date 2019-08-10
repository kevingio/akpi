<?php

use Illuminate\Database\Seeder;
use App\Models\Member;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::truncate();
        $filePath = public_path('seeds/anggota.csv');
        $members = csvToArray($filePath);
        foreach ($members as $members) {
            if($members !== false) {
                Member::create([
                    'member_no' => $members[1],
                    'name' => $members[2],
                    'location' => $members[3],
                    'phone_number' => $members[4],
                    'type' => $members[5],
                    'status' => $members[6],
                    'avatar' => ('/assets/members/' . $members[7]),
                    'created_at' => $members[8]
                ]);
            }
        }
    }
}
