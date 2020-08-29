<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Whislist;
use Illuminate\Support\Facades\Auth;

class WhislistController extends Controller
{
    public function counterWhislist()
    {
        $counter = Whislist::where('user_id','=',Auth::user()->id)->count();
        session(['whislistCounter'=> $counter]);
    }
    public function addWhislist($id)
    {
        if (!Whislist::where('user_id','=',Auth::user()->id)->where('product_id','=',$id)->exists()) {
            Whislist::create([
                'user_id' => Auth::user()->id,
                'product_id' => $id
            ]);
        }
        $this->counterWhislist();
        return redirect('whislist');

    }
    public function show()
    {
        $whislist = Whislist::join("products as p", "product_id","=","p.id")->where('user_id', Auth::user()->id)->get();
        return view('wishlist',compact('whislist'));

    }
    public function delete($id)
    {
        Whislist::where('user_id','=',Auth::user()->id)->where('product_id','=',$id)->delete();
        $this->counterWhislist();
        return redirect('whislist');
    }
}
