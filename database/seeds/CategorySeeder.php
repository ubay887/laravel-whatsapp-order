<?php

use Illuminate\Database\Seeder;

use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Foods']);
        Category::create(['name' => 'Espresso Base']);
        Category::create(['name' => 'Daily Brew']);
        Category::create(['name' => 'Local Taste']);
        Category::create(['name' => 'Millennial Signatures']);
        Category::create(['name' => 'Non Coffee']);
        Category::create(['name' => 'Special Cakes']);
    }
}
