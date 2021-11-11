<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Skate;
use Illuminate\Http\Request;
use Auth;
use Gate;
use Storage;

class SkateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index', 'showSkates']]);
    }

    public function index()
    {
        $skates = Skate::paginate(10)->withQueryString();
        return view("pages.home", compact('skates'));
    }

    public function newSkateForm()
    {
        return view("pages.add-product");
    }

    public function storeSkates(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required',
            'img' => 'mimes: jpg,jpeg,png|required|max:10000'
        ]);
        $path = $request->file('img')->store('public/images');
        $filename = str_replace('public/',"",$path);

        Skate::create([
            'title' => request('title'),
            'price' => request('price'),
            'description' => request('description'),
            'category' => request('category'),
            'img' => $filename,
            'owner' => Auth::id()
        ]);
        return redirect("/");
    }

    public function showSkates(Skate $skate){
        return view("pages.skates", compact('skate'));
    }
    
    public function viewEditSkateForm(Skate $skate){
        if (Gate::allows('edit', $skate)) {
            return view("pages.skates-edit", compact('skate'));
        }
        $error = ['code' => 403, 'message' => 'Jūs neturite teisės į šį puslapį.'];
        return view("pages.error", compact('error'));
    }

    public function updateSkate(Request $request, Skate $skate) {
        if (Gate::allows('edit', $skate)) {
            $validated = $request->validate([
                'title' => 'required|max:255',
                'description' => 'required',
                'price' => 'required'
            ]);

            Skate::where('id', $skate->id)->update($request->only(['title', 'description', 'price']));
            
            if($request->file('img') != null) {
                Storage::delete('public/'.$skate->img);
                $path_to_img = $request->file('img')->store('public/images');
                $filename = str_replace('public/', '' , $path_to_img);
                Skate::where('id', $skate->id)->update(['img' => $filename]);
            }

            return redirect('/');
        }
        $error = ['code' => 403, 'message' => 'Jūs neturite teisės į šį puslapį.'];
        return view("pages.error", compact('error'));
    }

    public function viewRemoveSkateForm(Skate $skate) {
        if (Gate::allows('edit', $skate)) {
            return view('pages.view-remove', compact('skate'));
        }
        $error = ['code' => 403, 'message' => 'Jūs neturite teisės į šį puslapį.'];
        return view("pages.error", compact('error'));
    }

    public function deleteSkate(Skate $skate){
        if (Gate::allows('delete', $skate)) {
            Storage::delete('public/'.$skate->img);
            $skate->delete();
            return redirect('/');
        }
        $error = ['code' => 403, 'message' => 'Jūs neturite teisės į šį puslapį.'];
        return view("pages.error", compact('error'));
    }

    public function dashboard() {
        $skates = Skate::where('owner', Auth::id())->get();
        return view('dashboard', compact('skates'));
    }
}
