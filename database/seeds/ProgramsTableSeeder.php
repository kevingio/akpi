<?php

use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Program::truncate();
        $filePath = public_path('seeds/program.csv');
        $programs = csvToArray($filePath);
        foreach ($programs as $program) {
            if($program !== false) {
                Program::create([
                    'name' => $program[1],
                    'description' => $program[2],
                    'image' => ('/assets/programs/' . $program[3]),
                    'created_at' => $program[4]
                ]);
            }
        }
    }
}
