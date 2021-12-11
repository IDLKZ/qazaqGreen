<?php

namespace Database\Factories;

use App\Models\Magazine;
use Illuminate\Database\Eloquent\Factories\Factory;

class MagazineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Magazine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->word,
        'title_ru' => $this->faker->word,
        'title_kz' => $this->faker->word,
        'title_en' => $this->faker->word,
        'description_ru' => $this->faker->text,
        'description_kz' => $this->faker->text,
        'description_en' => $this->faker->text,
        'image' => $this->faker->word,
        'file' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
