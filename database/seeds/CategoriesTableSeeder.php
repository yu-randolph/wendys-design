<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category = new Category;
        $category->name = "SIGNATURE ICED TEA";
        $category->image = "iced-tea.jpg";
        $category->save();

        $category = new Category;
        $category->name = "BUNDLE MEAL";
        $category->image = "bundle-meal.jpg";
        $category->save();

        $category = new Category;
        $category->name = "BACONATOR";
        $category->image = "smokehouse-barbeque-nator.jpg";
        $category->save();

        $category = new Category;
        $category->name = "HOT N' JUICY CHEESEBURGER";
        $category->image = "deluxe-sandwiches.jpg";
        $category->save();

        $category = new Category;
        $category->name = "HEARTY SANDWICHES";
        $category->image = "hearty-sandwich.jpg";
        $category->save();

        $category = new Category;
        $category->name = "MEATY CHICKEN";
        $category->image = "meaty-chicken.jpg";
        $category->save();

        $category = new Category;
        $category->name = "REAL MEAL DEALS";
        $category->image = "rmd-category.jpg";
        $category->save();

        $category = new Category;
        $category->name = "GREEN SALADS";
        $category->image = "green-salads.jpg";
        $category->save();

        $category = new Category;
        $category->name = "FROSTY";
        $category->image = "dairy-frosty.jpg";
        $category->save();

        $category = new Category;
        $category->name = "SIGNATURE SIDES";
        $category->image = "fries.jpg";
        $category->save();

        $category = new Category;
        $category->name = "BREAKFAST*";
        $category->image = "wendys-breakfast.jpg";
        $category->save();

        $category = new Category;
        $category->name = "BEVERAGES";
        $category->image = "beverages.jpg";
        $category->save();
    }
}
