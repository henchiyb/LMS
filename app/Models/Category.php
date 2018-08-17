<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Category extends Model
{
    use SoftDeletes;
    
    protected $table = 'categories';

    protected $fillable = [
        'title',
        'parent_id',
    ];

    public function getParentCategoryById($id)
    {
        $parentCategory = Category::findOrFail($id);

        return $parentCategory;
    }

    public function createCategory($data)
    {
        return Category::create($data);
    }

    public function updateCategory($data, $id)
    {
        $result = Category::findOrFail($id)->update($data);

        return $result;
    }

    public function deleteCategory($id)
    {
        $result = Category::findOrFail($id)->delete();

        return $result;
    }
}
