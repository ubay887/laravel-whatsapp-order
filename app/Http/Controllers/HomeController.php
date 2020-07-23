<?php

namespace App\Http\Controllers;

use Auth;
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
        return view('index');
    }

    public function gg()
    {
        $data = [
            'items' => [
                [
                    'name' => 'Kopi',
                    'price' => 10000,
                    'qty' => 2
                ],
                [
                    'name' => 'Teh',
                    'price' => 5000,
                    'qty' => 1
                ]
            ],
            'note' => NULL
        ];
        $order;
        $i = 0;
        $totalteks = 'Total: *Rp ';
        $total = 0;
        $note = ($data['note'] !== NULL) ? $data['note'] : 'Tidak ada pesan' ;
        
        $order = 'Halo kak, saya mau order.
 
';
        foreach ($data['items'] as $key => $value) {
            $order .= '*'.++$i.'. '.$value['name'].'*
';
            $order .= '    Quantity: '.$value['qty'].' pcs
';
            $order .= '    Harga (@): Rp '.$value['price'].'
';
            $order .= '    Total Harga: Rp '.$value['price']*$value['qty'].'
            
';
            $total += $value['price']*$value['qty'];
        }

        echo $order;
        echo $total;

        $id = '
--------------------------------
';
        $id .= '*Nama:* ' . '
';
        $id .= Auth::user()->name . ' (' . Auth::user()->email . ')' . '
';
        $pesan = '*Pesan:* ' . $note . '

';

        $phone = '+6282341809508';
        
        return redirect('https://web.whatsapp.com/send?phone='.$phone.'&text='.rawurlencode($order.$pesan.$totalteks.$total.'*'.$id));
    }
}
