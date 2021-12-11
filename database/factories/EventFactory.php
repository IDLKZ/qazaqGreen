<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->word,
        'slug' => $this->faker->word,
        'title_ru' => $this->faker->word,
        'title_kz' => $this->faker->word,
        'title_en' => $this->faker->word,
        'subtitle_ru' => $this->faker->word,
        'subtitle_kz' => $this->faker->word,
        'subtitle_en' => $this->faker->word,
        'description_ru' => $this->faker->text,
        'description_kz' => $this->faker->text,
        'description_en' => $this->faker->text,
        'date_start' => $this->faker->word,
        'date_end' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
