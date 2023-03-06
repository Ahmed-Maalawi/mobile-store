<?php

namespace Database\Seeders;

use App\Models\BannerImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BannerImage::factory(4)->create();
    }
}
