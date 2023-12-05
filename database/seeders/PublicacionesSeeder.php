<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublicacionesSeeder extends Seeder
{
    public function run()
    {
        factory(App\Publicaciones::class, 500)->create();
    }
}
