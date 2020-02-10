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
        $collegeRawData = file_get_contents(__DIR__ . '/../colleges.json');
        $collegeData = json_decode($collegeRawData);

        foreach ($collegeData->colleges as $college) {
            DB::table('colleges')->insert([
                'name' => $college['name'],
                'city' => $college['city'],
                'state' => $college['state'],
            ]);
        }
    }
}
