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
        DB::table('category')->insert(
            ['name' => 'Root Category']
        );

        DB::table('post_status')->insert([
            ['title' => 'hide'],
            ['title' => 'visible']
        ]);
    }
}
