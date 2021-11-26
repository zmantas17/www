<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Skate;
use Gate;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=> [ 'viewSkatesByCategory']]);
    }

    public function index(){
        $categories = Category::all();
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

    public function editCategory(Category $category){
            return view("pages.category-edit", compact('category'));
            
        $error = ['code' => 403, 'message' => 'Jūs neturite teisės į šį puslapį.'];
        return view("pages.error", compact('error'));
    }

    public function viewSkatesByCategory(Category $category){
        $skates = Skate::where('category', $category->id)->paginate(10)->withQueryString();
        return view("pages.skates-by-category", compact('skates', 'category'));
    } 
}
