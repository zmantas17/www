<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Gate;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $categories = Category::paginate(10);
        return view('categories', compact('categories'));
    }

    public function viewForm(){
        return view("pages.add-category");
    }

    public function storeCategory(Request $request){
        $validate = $request->validate([
            'name' => 'required|max:255'
        ]);
        Category::create([
            'name' => request('name')
        ]);

        return redirect('/categories');
    }
    public function updateCategory(Request $request, Category $category) {
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);

        Category::where('name', $category->name)->update($request->only(['name']));

        return redirect('/');
    }
   
    public function viewCategory(Category $category){
        return view("pages.edit-category", compact('category'));
    }
    
    public function viewRemoveCategoryForm(Category $category) {
        return view('pages.remove-category', compact('category'));
    }

    public function deleteCategory(Category $category){
            $category->delete();
            return redirect('/');;
    }
}
