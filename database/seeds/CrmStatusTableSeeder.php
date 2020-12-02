<?php

use App\Models\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [
            [
                'id'         => 1,
                'name'       => 'Lead',
                'created_at' => '2020-12-02 08:09:35',
                'updated_at' => '2020-12-02 08:09:35',
            ],
            [
                'id'         => 2,
                'name'       => 'Customer',
                'created_at' => '2020-12-02 08:09:35',
                'updated_at' => '2020-12-02 08:09:35',
            ],
            [
                'id'         => 3,
                'name'       => 'Partner',
                'created_at' => '2020-12-02 08:09:35',
                'updated_at' => '2020-12-02 08:09:35',
            ],
        ];

        CrmStatus::insert($crmStatuses);
    }
}
