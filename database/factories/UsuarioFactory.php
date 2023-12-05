<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;


class UsuarioFactory extends Factory
{

    public function definition(): array
    {
        return [
            'nombre' => fake()->firstName,
            'apellidos' => fake()->lastName,
            'f_nacimiento' => fake()->date,
        ];
    }
}


