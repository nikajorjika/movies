<?php

namespace Database\Seeders;

use App\Models\Episode;
use App\Models\Language;
use App\Models\Movie;
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

        Movie::factory(50)->create()->each(function ($movie) {
            $movie->episodes()->saveMany(Episode::factory(12)->make());
        });
    }
}
