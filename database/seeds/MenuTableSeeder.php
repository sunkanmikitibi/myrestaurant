<?php

use Illuminate\Database\Seeder;
use App\Category;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = factory(Category::class, 5)->create();
        $categories->each(function($category) {
            factory(\App\Models\Menu::class, 5)->create([
                'category_id' => $category->id,
            ]);
        });

    }
}
