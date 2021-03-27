<?php

namespace Database\Factories;

use App\Models\Episode;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class EpisodeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Episode::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->text(10);
        return [
            'name' => [
                'en' => $name
            ],
            'episode_number' => rand(0, 26),
            'release_date' => Carbon::now()->addDays(rand(0, 100)),
            'language_id' => 1,
            'type' => ['dubbed', 'subbed'][rand(0, 1)],
        ];
    }
}
