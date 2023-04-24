<?php
namespace App\Repositories\Interfaces;

Interface CategoryRepositoryInterface{

    // public function allCategories();
    // public function storeCategory($data);
    // public function findCategory($id);
    // public function updateCategory($data, $id);
    // public function destroyCategory($id);

    public function all();

    public function get($id);

    public function store(array $data);

    public function update($id, array $data);

    public function delete($id);
}
