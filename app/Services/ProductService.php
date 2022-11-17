<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;


class ProductService
{

    public function all(): Collection
    {
        return Product::with('category')->get();
    }

    public function store(array $data): Product
    {
        return Product::create($data);
    }

    public function show(Product $product): Product
    {
        return $product;
    }

    public function update(Product $product, $data): bool
    {
        return $product->update($data);
    }

    public function delete(Product $product): void
    {
        $product->delete();
    }
}
