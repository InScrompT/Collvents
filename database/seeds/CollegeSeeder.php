<?php

use Illuminate\Database\Seeder;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collegeRawData = file_get_contents(app()->databasePath('colleges.json'));
        $collegeData = json_decode($collegeRawData, true);

        foreach ($collegeData['colleges'] as $college) {
            \App\College::create([
                'name' => $college['name'],
                'city' => $college['city'] ?? null,
                'state' => $college['state'] ?? null,
            ]);
        }
    }
}
