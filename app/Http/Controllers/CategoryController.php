<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use function Psr\Log\error;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();
        $users = User::all();
        return view('category.index', ['categories'=>$categories,'users'=>$users]);
    }

    public function create()
    {
        $users = User::all();
        return view('category.create', ['users'=>$users]);
    }

    public function store(CategoryRequest $request)
    {
        Category::create($request->all());
        return redirect()->back()->with('message', 'Category has been Added successfully');
    }

    public function show(Category $category)
    {

    }

    public function edit(Category $category)
    {
        $users = User::all();
        return view('category.edit', compact('category','users'));
    }

    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return redirect('category');
    }

    public function destroy(Category $category)
    {
        $category->products()->delete();
        $category->delete();
        return redirect()->back()->with('message', 'Sale data Deleted!');
    }
}
