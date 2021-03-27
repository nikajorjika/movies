<?php

namespace Database\Factories;

use App\Models\Title;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class TitleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Title::class;

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
            'original_name' => $name,
            'release_date' => Carbon::now()->addDays(rand(0, 100)),
            'plot' =>  [
                'en' => $this->faker->text(150)
            ],
            'other_names' => [],
            'status' => ['planned', 'ongoing', 'finished'][rand(0, 2)]
        ];
    }
}
