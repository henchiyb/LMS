<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\FormCategoryRequest;

class CategoryController extends Controller
{
    protected $modelCategory;
    /**
     * Create a new controller instance.
     *
     * @param Specialize $specialize
     * @return void
     */
    public function __construct(Category $category)
    {
        $this->modelCategory = $category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $parentCategories = Category::all()->where('parent_id', 0)->pluck('title', 'id');
        $parentCategories[0] = 'No choice';
        
        return view('admin.categories.index', compact('categories', 'parentCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormCategoryRequest $request)
    {
        $data = $request->all();
        $result = $this->modelCategory->createCategory($data);

        if ($result) {
            flash(__('create status') . $result->id)->success();
        } else {
            flash(__('something wrong'))->error();
        }
    
        return redirect(route('admins.categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $parentCategories = Category::all()->where('parent_id', 0)->pluck('title', 'id');

        return view('admin.categories.edit', compact('category', 'parentCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormCategoryRequest $request, $id)
    {
        $data = $request->all();
        $result = $this->modelCategory->updateCategory($data, $id);

        if ($result) {
            flash(__('update status') . $id)->success();
        } else {
            flash(__('something wrong'))->error();
        }

        return redirect(route('admins.categories.edit', $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->modelCategory->deleteCategory($id);

        if ($result) {
            flash(__('delete status') . $id)->success();
        } else {
            flash(__('something wrong'))->error();
        }

        return redirect(route('admins.categories.index'));
    }
}
