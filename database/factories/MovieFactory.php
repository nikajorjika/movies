<?php

namespace Database\Factories;

use App\Models\Movie;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->text(10);
        return [
            'name' => $name,
            'original_name' => $name,
            'slug' => Str::slug($name),
            'release_date' => Carbon::now()->addDays(rand(0, 100)),
            'plot' =>  $this->faker->text(150),
            'other_names' => [$name,  $this->faker->text(10),  $this->faker->text(10)],
            'status' => ['planned', 'ongoing', 'finished'][rand(0, 2)]
        ];
    }
}
