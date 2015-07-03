<?php
namespace App\Course\Repositories;

interface ICategoryRepository
{
    public function categories($search);
    public function store($input);
    public function show($id);
    public function update($input, $id);
    public function destroy($id);
    public function categoriesForSelect();
}
