<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class HotelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hotel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Hotel '.$this->faker->unique()->company,
            'description' => $this->faker->words($nb = 128, $asText = true),
            'images' => $this->faker->imageUrl($width = 320, $height = 160),
            'address' => $this->faker->unique()->streetAddress,
            'phone' => $this->faker->unique()->tollFreePhoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'owner_id' => $this->faker->unique()->numberBetween(1, \App\Models\User::count()),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
