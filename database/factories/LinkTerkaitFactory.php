<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LinkTerkait>
 */
class LinkTerkaitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul'     => $this->faker->sentence(5),
            'gambar'    => $this->faker->randomElement(['file/link-terkait/00.png']),
            'url'       => $this->faker->randomElement(['https://nokensoft.com']),
            'status'    => $this->faker->randomElement(['publish']),
        ];
    }
}
