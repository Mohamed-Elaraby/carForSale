<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SeetingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'currency' => 'ريال سعودى'
        ]);
    }
}
