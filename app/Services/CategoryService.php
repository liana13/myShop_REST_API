<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;


class CategoryService
{

    public function all(): Collection
    {
        return Category::all();
    }

    public function store(array $data): Category
    {
        return Category::create($data);
    }

    public function show(Category $category): Category
    {
        return $category;
    }

    public function update(Category $category, $data): bool
    {
        return $category->update($data);
    }

    public function delete(Category $category): void
    {
        $category->delete();
    }
}
