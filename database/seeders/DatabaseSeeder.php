<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Role;
use App\Models\Sity;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $tags = Tag::factory(20)->create();
        Category::factory(10)->create();

        $posts = Post::factory(100)->create();

        foreach ($posts as $post){
            $randomCount = rand(1, 3);
            $tagsId = $tags->random($randomCount)->pluck('id');
            $post->tags()->attach($tagsId);
        }


        $roles=['user','moder','admin'];

        foreach ($roles as $role){
            Role::create([
                'role'=>$role
            ]);
        }
        $sity=['Санкт-Петербург','Казань','Москва','Нижний Новгород','Екатеринбург','Новосибирск','Челябинск','Самара','Уфа','Красноярск','Волгоград','Ростов-на-Дону','Тюмень','Казань','Пермь','Ижевск','Оренбург','Саратов','Тула','Томск'];
        // User::factory(10)->create();

        foreach($sity as $sity_elem){
            Sity::create([
                'sity'=>$sity_elem
            ]);
        }
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@admin.admin',
            'role'=>3

        ]);
    }
}
