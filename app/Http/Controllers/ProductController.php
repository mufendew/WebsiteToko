<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
    }
    public function cari(request $request)
    {
        $keyword = '%'.$request->input('kw').'%';
        $catagory = $request->input('c');
        $merek = $request->input('b');
        $sale = $request->input('disc');
        $lowPrice = $request->input('lp');
        $highPrice = $request->input('hp');

        $filter = $request->input('fltr');

        
        $query = Product::with('catagory')->where('nama','like',$keyword);

        if(!empty($lowPrice)){
            $query->where('harga','>=',$lowPrice);
        }
        if(!empty($highPrice)){
            $query->where('harga','<=',$highPrice);
        }

        if(!empty($catagory)){
            $query->whereHas('catagory', function ($query) use($catagory) {
                return $query->where('nama', $catagory);
            });
        }
        if(!empty($merek)){
            $query->whereHas('merek', function ($query) use($merek) {
                return $query->where('nama', $merek);
            });
        }
        if(!empty($filter)){
            if ($filter=="1") {
                $query->orderBy('rating','DESC');
            }elseif ($filter=="2"){
                $query->latest();
            }elseif ($filter=="3"){
                $query->orderBy('harga','ASC');
            }elseif ($filter=="4"){
                $query->orderBy('harga','DESC');
            }
        
        }

        
        // ->whereHas('whislist', function ($query) {
        //     return $query->where('user_id', Auth::user()->id);
        // })
        // ->with(
        //     ['whislist' => function($query){
        //         if (Auth::check()){
        //             $query->where('user_id', Auth::user()->id);
        //         }
        //     }])
        $products = $query->paginate(20);
        return view('shop',compact('products'));
    }
    public function detail($slug)
    {
        $product = Product::with('catagory')->where('slug',$slug)->first();
        return view('detailProduct',compact('product'));
    }
}
