<?php


namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;




class ProductsController extends Controller
{

    public function index() {


        $objects = Product::orderBy('price','ASC');

        $objects = $objects->simplePaginate(8);

        return view('front.shop.category' , [
            'objects' => $objects
        ]);
    }


    public function listArray() {
        $objects = Product::all('name', 'price');

        //$objects = Product::select('name','price')->get();

        // dd($objects);
        return view('front.shop.prices' , [
            'objects' => $objects
        ]);
    }


    public function show($slug)
    {
        $object = Product::where('slug', $slug)->firstOrFail();
        return view('front.shop.single-product', [
            'object' => $object
        ]);
    }

    public function ajaxSortArray(Request $request)
    {


        if ($request->value == 'prixUp') {
            $objects = Product::orderBy('price','ASC')->get();

        } elseif ($request->value == 'prixDown') {
            $objects = Product::orderBy('price','DESC')->get();
        }

        return response()->json([
            'res' => true,
            'message' => 'requete ajax ok',
            'view' => view('front.includes.table-list', [
                'objects' => $objects,
            ])->render(),
        ]);
    }


}
