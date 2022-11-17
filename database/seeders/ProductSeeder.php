<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        foreach ([
                     ['category_id' => 3, 'name' => 'GT-C3560'],
                     ['category_id' => 3, 'name' => 'GT-E2600'],
                     ['category_id' => 3, 'name' => 'S5570 Galaxy mini'],
                     ['category_id' => 3, 'name' => 'E2530 La Fleur'],
                     ['category_id' => 3, 'name' => 'S3350 Chat 335'],
                     ['category_id' => 3, 'name' => 'S5380 La Fleur Wave Y'],
                     ['category_id' => 3, 'name' => 'I9001 Galaxy S Plus'],
                     ['category_id' => 3, 'name' => 'I8350 Omnia W'],
                     ['category_id' => 4, 'name' => 'iPhone 3GS'],
                     ['category_id' => 4, 'name' => 'iPhone 4S'],
                     ['category_id' => 1, 'name' => 'sdf'],
                     ['category_id' => 3, 'name' => 'newProduct1'],
                     ['category_id' => 3, 'name' => 'prro']
                 ] as $product) {
            Product::factory()->create(['category_id' => $product['category_id'], 'name' => $product['name']]);
        }
    }
}
