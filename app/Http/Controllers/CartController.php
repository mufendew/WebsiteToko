<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function counterCart()
    {
        $counter = Cart::where('user_id','=',Auth::user()->id)->count();
        session(['cartCounter'=> $counter]);
    }
    public function addCart($id, Request $request)
    {
        $quantity = 1;
        if ($request->input('q') !== null){
            $quantity = $request->input('q');
        }
        if (!Cart::where('user_id','=',Auth::user()->id)->where('product_id','=',$id)->exists()) {
            Cart::create([
                'user_id' => Auth::user()->id,
                'product_id' => $id,
                'quantity' => $quantity
            ]);
        }else {
            Cart::where('user_id','=',Auth::user()->id)->where('product_id','=',$id)->increment('quantity',$quantity);
        }
        $this->counterCart();
        return redirect('cart');

    }
    public function show()
    {
        $cart = Cart::join("products as p", "product_id","=","p.id")->where('user_id', Auth::user()->id)->get();
        return view('cart',compact('cart'));

    }
    public function delete($id)
    {
        Cart::where('user_id','=',Auth::user()->id)->where('product_id','=',$id)->delete();
        $this->counterCart();
        return redirect('cart');
    }
    public function update(Request $request )
    {
        $id = $request->input('product_id');
        $quantity = $request->input('quantity');
        
        for ($i=0; $i < count($id); $i++) { 
            Cart::where('user_id','=',Auth::user()->id)->where('product_id','=',$id[$i])
            ->update(['quantity'=>$quantity[$i]]);    
        }

        return redirect('cart');
    }
}
