<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
    * Seed the application's database.
    */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
       
          \App\Models\User::factory()->create([
               'name' => 'Coders',
               'email' => 'coders.aulab@live.it',
             ]);
            
           
            Article::factory(4)->create();
            
        }
    }
    