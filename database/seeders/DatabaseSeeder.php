<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        $user= User::factory()->create([
            'name' => 'Paulyech',
            'email' => 'test@example.com'
        ]);
        
        Post::factory(6)->created([
                'user_id' => $user->id
                ]
            );
      
        // Post::create([
        // 'title'=> 'Gor Mahia Champions', 
        // 'tags' => 'kpl,Gor,football',
        // 'body'=> 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the un'
        // ]);
        // Post::create([
        // 'title'=> 'Gor Mahia Chuor Timbe', 
        // 'tags' => 'kpl,Gor,football',
        // 'body'=> 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the un'
        // ]);

        // Post::create([
        // 'title'=> 'Homeboyz stun star studded tusler ', 
        // 'tags' => 'kpl,homeboyz,football',
        // 'body'=> 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the un'
        // ]);

        
    }
}
