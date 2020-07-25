<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\Menu;
use App\User;
use App\Category;

class HomeController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        $kategori = Category::all();

        return view('index', compact('menu', 'kategori'));
    }

    public function home()
    {
        return redirect('/');
    }

    public function logout ()
    {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/');
    }
}
