<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;


class PublicacionFactory extends Factory
{

    public function definition(): array
    {
        return [
            'usuario_id' => Usuario::all()->random()->id,
            'titulo' => fake()->text(50),
            'publicacion' => fake()->text(100),
            'fecha' => fake()->date,
        ];
    }
}
