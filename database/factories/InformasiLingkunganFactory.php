<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InformasiLingkungan>
 */
class InformasiLingkunganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul'                 => $this->faker->randomElement(['Judul Informasi']),
            'keterangan_singkat'    => $this->faker->text(),
            'keterangan_lengkap'    => $this->faker->text(),
            'gambar'                => $this->faker->randomElement([
                'file/informasi-lingkungan/01.jpg',
                'file/informasi-lingkungan/02.jpg',
                'file/informasi-lingkungan/03.jpg',
                'file/informasi-lingkungan/04.jpg',
            ]),
            'url'                   => $this->faker->randomElement(['halaman/informasi-lingkungan']),
            'status'                => $this->faker->randomElement(['publish']),
        ];
    }
}
