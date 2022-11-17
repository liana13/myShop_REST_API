<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $categories = [
            ['parent_id' => 0, 'name' => 'Телефоны'],
            ['parent_id' => 0, 'name' => 'Планшеты'],
            ['parent_id' => 1, 'name' => 'Телефоны Samsung'],
            ['parent_id' => 1, 'name' => 'Телефоны Apple'],
            ['parent_id' => 2, 'name' => 'Планшеты Apple'],
            ['parent_id' => 2, 'name' => 'Планшеты Acer'],
            ['parent_id' => 2, 'name' => 'Планшеты Samsung'],
            ['parent_id' => 1, 'name' => 'testNewCat'],
            ['parent_id' => 1, 'name' => 'testNewCat2'],
            ['parent_id' => 0, 'name' => 'newGeneralCat']
        ];
        DB::table('categories')->insert($categories);
    }
}
