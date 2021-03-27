<?php

namespace Database\Seeders;

use App\Models\Episode;
use App\Models\Language;
use App\Models\Title;
use Illuminate\Database\Seeder;

class DefaultStartupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create([
            'name' => ['en' => 'English'],
            'original_name' => 'English',
            'flag' => '/flas/en.png'
        ]);

        Title::factory(10)->create()->each(function ($title) {
            $title->episodes()->saveMany(Episode::factory(12)->make());
        });
    }
}
