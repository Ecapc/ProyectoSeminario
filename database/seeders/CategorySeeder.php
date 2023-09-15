<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Creacion de usuarios estandar',
                'slug' => Str::slug('Creacion de usuarios estandar'),
                'icon' => '<i class="fa-solid fa-users"></i>'
            ],
            [
                'name' => 'Crear y Asignar Vehiculos',
                'slug' => Str::slug('Crear y Asignar Vehiculos'),
                'icon' => '<i class="fa-solid fa-car"></i>'
            ],
            [
                'name' => 'Gestor de informacion',
                'slug' => Str::slug('Gestor de informacion'),
                'icon' => '<i class="fa-solid fa-circle-info"></i>'
            ],
            [
                'name' => 'Gestor de Estasdistica',
                'slug' => Str::slug('Gestor de Estasdistica'),
                'icon' => '<i class="fa-regular fa-flag"></i>'
            ],
            ];
            foreach($categories as $category){
                Category::factory(1)->create($category);
            }
    }
}
