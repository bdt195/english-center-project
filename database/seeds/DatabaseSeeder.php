<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        DB::table('student')->insert([
            [
                'first_name' => 'Tho',
                'last_name' => 'Bui',
                'date_of_birth' => '1995-11-14',
                'email' => 'buiductho195@gmail.com',
                'phone_number' => '0966257823',
                'address' => 'Hanoi',
                'password' => 'unyv93n5b98v73b295ny3345834275n327v093579'
            ]
        ]);

        DB::table('admins')->insert([
            [
                'first_name' => 'Tho',
                'last_name' => 'Bui',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin@123'),
            ]
        ]);
    }
}
