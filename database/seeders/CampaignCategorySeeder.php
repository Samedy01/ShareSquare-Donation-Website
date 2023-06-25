<?php

namespace Database\Seeders;

use App\Models\CampaignCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampaignCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = [
            [
                'name' => 'Education',
                'is_enabled' => 1,
            ],
            [
                'name' => 'Health',
                'is_enabled' => 1,
            ],
            [
                'name' => 'Disaster',
                'is_enabled' => 1,
            ],
            [
                'name' => 'Agriculture',
                'is_enabled' => 1,
            ],
            [
                'name' => 'Orphan Charity',
                'is_enabled' => 1,
            ],
        ];
        foreach ($categories as $value) {
            CampaignCategory::create($value);
        }
    }
}
