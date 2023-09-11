<?php

namespace Database\Seeders;

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
                'created_at' => '2023-09-11 13:58:39',
                'updated_at' => '2023-09-11 13:58:39',
            ],
            [
                'id'         => 2,
                'name'       => 'Customer',
                'created_at' => '2023-09-11 13:58:39',
                'updated_at' => '2023-09-11 13:58:39',
            ],
            [
                'id'         => 3,
                'name'       => 'Partner',
                'created_at' => '2023-09-11 13:58:39',
                'updated_at' => '2023-09-11 13:58:39',
            ],
        ];

        CrmStatus::insert($crmStatuses);
    }
}
