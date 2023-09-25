<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@admin',
            'is_admin' => true,
        ]);

        $user1 = \App\Models\User::factory()->create();
        \App\Models\User::factory(10)->create();

        $course1 = Course::create([
            'title' => 'Curso de Programação Web',
            'description' => 'Aprenda a construir websites incríveis com HTML, CSS e JavaScript.',
        ]);
        Course::create([
            'title' => 'Curso de Marketing Digital',
            'description' => 'Domine as estratégias de marketing online para impulsionar seus negócios.',
        ]);

        $course1->lessons()->create([
            'title' => 'Aula 1',
            'content' => 'Aula sobre html',
            'link' => 'lF5jQkz_OyY?si=VFL3D_RoYakuj1la',
        ]);

        $course1->lessons()->create([
            'title' => 'Aula 2',
            'content' => 'Aula sobre css',
            'link' => 'lF5jQkz_OyY?si=VFL3D_RoYakuj1la',
        ]);

        $user1->courses()->attach($course1);



    }
}
