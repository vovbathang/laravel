<?php
/**
 * Created by PhpStorm.
 * User: thangnguyen
 * Date: 10/01/2019
 * Time: 14:47
 */
use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Uncategorized',
            'slug' => 'uncategorized',
            'order' => 0,
            'parent' => 0
        ]);
        factory(Category::class, 50)->create();
    }
}
