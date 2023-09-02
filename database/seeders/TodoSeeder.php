<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Database\Factories\TodoFactory;

class TodoSeeder extends Seeder
{

    public function run(): void
    {
        \App\Models\Todo::name(50)->create();
        \App\Models\Todo::description(50)->create();
        
    }
}
