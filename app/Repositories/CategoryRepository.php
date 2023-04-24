<?php

namespace App\Repositories;

use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{

    public function all()
    {
        return Category::all();
    }

    public function store($data)
    {
        return Category::create($data);
    }

    public function get($id)
    {
        return Category::find($id);
    }

    public function update($data, $id)
    {
        $category = Category::where('id', $id)->first();
        $category->name = $data['name'];
        $category->slug = $data['slug'];
        $category->save();
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
    }
}
