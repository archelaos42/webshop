<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ProductSeeder::class,
        ]);

        DB::table('categories')->insert([
            'name' => 'Male',
        ]);

        DB::table('categories')->insert([
            'name' => 'Female',
        ]);

        DB::table('categories')->insert([
            'name' => 'Child',
        ]);

        DB::table('categories')->insert([
            'name' => 'Clothes',
        ]);

        DB::table('categories')->insert([
            'name' => 'Shoes',
        ]);

        DB::table('categories')->insert([
            'name' => 'Accessories',
        ]);

    }
}
