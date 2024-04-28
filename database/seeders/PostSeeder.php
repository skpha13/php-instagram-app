<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory()->create([
            'title' => 'Look at my new car!',
            'description' => 'Hello friends, today i bought myself a new Porsche 911 Turbo S, what do you think?',
            'user_id' => 1
        ]);
    }
}
