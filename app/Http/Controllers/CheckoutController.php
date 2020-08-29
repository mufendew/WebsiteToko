<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Checkout;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function show()
    {
        $cart = Cart::join("products as p", "product_id","=","p.id")->where('user_id', Auth::user()->id)->get();
        $address = DB::table('addresses')->where('user_id', Auth::user()->id)->first();

        return view('checkout',compact('cart','address'));
        
    }
    public function insert(Request $request)
    {
        $cart = Cart::join("products as p", "product_id","=","p.id")->where('user_id', Auth::user()->id)->get();
        $totalCartPrice = 0;
        $totalWeight = 0;
        $cartTrim = [];
        foreach ($cart as $c) {
            $totalCartPrice += $c->harga*$c->quantity; 
            $totalWeight += $c->berat*$c->quantity;
            
        }
        $address = DB::table('addresses')->where('user_id', Auth::user()->id)->first();
        $addressId =($address==null) ? null : $address->id;
        
        if($address == null){
            $addressId = DB::table('addresses')->insertGetId([
                'name' => $request->input('name'),
                'user_id' => Auth::user()->id,
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'city' => $request->input('city'),
                'province' => $request->input('province'),
                'postal_code' => $request->input('postal_code')
            ]);
        }

        $order = Checkout::create([
            'user_id' => Auth::user()->id,
            'address_id' => $addressId,
            'weight_total' => $totalWeight,
            'status' => "Konfirmasi Pembayaran",
            'coupon' => null,
            'payment' => "COD",
            'total' => $totalCartPrice
        ]);
        foreach ($cart as $k) {
            $array = [
                'order_id' => $order->id,
                'product_id' => $k->product_id,
                'nama' => $k->nama,
                'harga' => $k->harga,
                'berat' => $k->berat,
                'quantity' => $k->quantity
            ];
            array_push($cartTrim,$array);
        }
        DB::table('order_product')->insert($cartTrim);
        Cart::where('user_id','=',Auth::user()->id)->delete();
        $cartC = new CartController;
        $cartC->counterCart();
        echo "<script type='text/javascript'>alert('Pesanan berhasil di checkout');</script>";
        return redirect('home');
    }
}
