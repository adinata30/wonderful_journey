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
        $cateory = new Category;
        $cateory->name = "Beach";
        $cateory->save();
        
        $cateory = new Category;
        $cateory->name = "Mountain";
        $cateory->save();

        $cateory = new Category;
        $cateory->name = "Temple";
        $cateory->save();

        $cateory = new Category;
        $cateory->name = "Lake";
        $cateory->save();
    }
}
