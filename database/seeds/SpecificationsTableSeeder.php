<?php

use App\Models\Specification;
use Illuminate\Database\Seeder;

class SpecificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specifications = [
            'ابواب شفط',
            'رادار',
            'رؤية ليلية',
            'تحديد المسار',
            'ستائر خلفية',
            'شمعات led',
            'شمعات laiser',
            'نظام الخرائط',
            'apple car play',
            'android auto',
            'نظام صوتي HARMAN KARDON',
            'فتحة سقف',
            'كاميرات رؤية 360',
            'تدفئة مراتب',
            'تبريد مراتب',
            'KIT (M)',
            'سقف بانوراما',
            'تعطير السيارة',
            'شاشات خلفية',
            'حساسات امامية',
            'حساسات خلفية',
            'شنطة كهرباء',
            'عداد ديجيتال',
            'بروجيكتور',
        ];
        foreach ($specifications as $specification)
        {
            Specification::create([
                'name' => $specification
            ]);
        }
    }
}
