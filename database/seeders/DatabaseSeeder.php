<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // 36. Specific data
        $categories = new Category();
        $categories->id=1;
        $categories->name="Langues";
        $categories->save();

        $categories = new Category();
        $categories->id=2;
        $categories->name="Math";
        $categories->save();

        $categories = new Category();
        $categories->id=3;
        $categories->name="Sciences";
        $categories->save();

        $categories = new Category();
        $categories->id=4;
        $categories->name="History";
        $categories->save();

        $categories = new Category();
        $categories->id=5;
        $categories->name="Geography";
        $categories->save();

        $categories = new Category();
        $categories->id=6;
        $categories->name="Nature";
        $categories->save();

        $categories = new Category();
        $categories->id=7;
        $categories->name="Animals";
        $categories->save();

        $categories = new Category();
        $categories->id=8;
        $categories->name="Other";
        $categories->save();


        \App\Models\User::factory(20)->create();
        \App\Models\Deck::factory(6)->create();
        \App\Models\Card::factory(325)->create();
    }
}
