<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('settings')->delete();

        $data = [
            ['key' => 'current_session', 'value' => '2022-2023'],
            ['key' => 'school_title', 'value' => 'VS'],
            ['key' => 'school_name', 'value' => 'Victoria School'],
            ['key' => 'end_first_term', 'value' => '01-9-2022'],
            ['key' => 'end_second_term', 'value' => '01-06-2024'],
            ['key' => 'phone', 'value' => '0123456789'],
            ['key' => 'address', 'value' => 'New York'],
            ['key' => 'school_email', 'value' => 'info@victoriaschool.com'],
            ['key' => 'logo', 'value' => '1.jpg'],
        ];

        DB::table('settings')->insert($data);
    }
}
