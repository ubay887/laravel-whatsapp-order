<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $phone = '+6282341809508';
        $body = 
'Hai kak gus mang, saya mau kenalan
        
nama saya gus dek
        
Aiya';
        
        return view('home');
        return redirect('https://web.whatsapp.com/send?phone='.$phone.'&text='.rawurlencode($body));
        // return 'some text';
    }
}
