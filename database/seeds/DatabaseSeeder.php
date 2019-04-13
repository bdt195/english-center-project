<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            ['name' => 'Root Category']
        ]);

        DB::table('category')->insert([
            ['name' => 'Category 1', 'parent_id' => 1],
            ['name' => 'Category 2', 'parent_id' => 1],
            ['name' => 'Category 3', 'parent_id' => 1],
            ['name' => 'Category 4', 'parent_id' => 1],
            ['name' => 'Category 5', 'parent_id' => 1],
            ['name' => 'Category 1.1', 'parent_id' => 2],
            ['name' => 'Category 1.2', 'parent_id' => 2],
            ['name' => 'Category 1.3', 'parent_id' => 2],
            ['name' => 'Category 2.1', 'parent_id' => 3],
            ['name' => 'Category 2.2', 'parent_id' => 3],
            ['name' => 'Category 2.3', 'parent_id' => 3],
            ['name' => 'Category 3.1', 'parent_id' => 4],
            ['name' => 'Category 3.2', 'parent_id' => 4],
            ['name' => 'Category 3.3', 'parent_id' => 4]
        ]);

        DB::table('post_status')->insert([
            ['title' => 'hide'],
            ['title' => 'visible']
        ]);
    }
}
