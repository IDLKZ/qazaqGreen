<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->word,
        'name' => $this->faker->word,
        'position' => $this->faker->word,
        'image' => $this->faker->word,
        'about' => $this->faker->text,
        'instagram' => $this->faker->word,
        'facebook' => $this->faker->word,
        'vk' => $this->faker->word,
        'linkedin' => $this->faker->word,
        'twitter' => $this->faker->word,
        'email' => $this->faker->word,
        'website' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
