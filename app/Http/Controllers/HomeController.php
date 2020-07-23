<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\Menu;
use App\User;

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
        $menu = Menu::all();

        return view('index', compact('menu'));
    }

    public function order(Request $request)
    {
        $data = [];
        $total = 0;
        foreach ($request->menu as $key => $value) {
            if ($value != null) {
                $data['items'][] = [
                    'id'        => $key,
                    'flag_id'   => Menu::firstMenu($key)->flag_id,
                    'name'      => Menu::firstMenu($key)->name,
                    'price'     => Menu::firstMenu($key)->new_price,
                    'img'       => Menu::firstMenu($key)->img,
                    'qty'       => $value
                ];

                $total += Menu::firstMenu($key)->new_price * $value;
            }
        }
        $data['total'] = $total;
        
        // return $data['items'][0]['name'];
        return view('order', compact('data'));
    }

    public function payment(Request $request)
    {
        if (Auth::user()->name != $request->name) {
            User::updateName($request->name);
        }

        if (Auth::user()->phone != $request->phone) {
            User::updatePhone($request->phone);
        }

        $order;
        $i = 0;
        $totalteks = 'Total: *Rp ';
        $total = 0;
        $note = ($request->note !== NULL) ? $request->note : 'Tidak ada pesan' ;
        
        $order = 'Halo kak, saya mau order.
 
';
        foreach ($request->menu as $key => $value) {
            $order .= '*'.++$i.'. '.Menu::firstMenu($key)->name.'*
';
            $order .= '    Quantity: '.$value.' pcs
';
            $order .= '    Harga (@): Rp '.Menu::firstMenu($key)->new_price.'
';
            $order .= '    Total Harga: Rp '.Menu::firstMenu($key)->new_price * $value.'
            
';
            $total += Menu::firstMenu($key)->new_price * $value;
        }

        echo $order;
        echo $total;

        $id = '
--------------------------------
';
        $id .= '*Pemesan:* ' . '
';
        $id .= $request->name . '
';
        $id .= $request->phone . '
'; 
        $id .= $request->email . '
';
        $pesan = '*Pesan:* ' . $note . '

';

        $phone = '+6282341809508';
        
        return redirect('https://web.whatsapp.com/send?phone='.$phone.'&text='.rawurlencode($order.$pesan.$totalteks.$total.'*'.$id));
    }
}
