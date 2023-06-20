<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{

    public function index()
    {
        return view('front.shop.cart');
    }

    public function add($id, Request $request)
    {
        $object = Product::findOrFail($id);

        if ($request->id) {
            $cart = session()->get('cart', []);
            if(isset($cart[$id])) {
                $cart[$id]['quantity']++;
            } else {
                $cart[$id] = [
                    "name" => $object->name,
                    "quantity" => 1,
                    "price" => $object->price,
                    "description" => $object->description
                ];
            }
            session()->put('cart', $cart);

           // redirect()->back()->with('message', 'Votre produit a bien été ajouté');

            return response()->json([
                'res' => true,
                'message' => 'Produit ajouté au panier',
                'view' => view('front.includes.count-cart')->render(),
                'alert' => 'Produit ajouté au panier'
            ]);
        } else {
            return response()->json([
                'res' => false,
                'message' => 'Produit non ajouté au panier'
            ]);
        }

    }

    public function update(Request $request)
    {
        if($request->id &&  $request->qt){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->qt ;
            session()->put('cart', $cart);

            return response()->json([
                'res' => true,
                'message' => 'Quantité modifiée',
                'view' => view('front.includes.table-cart')->render(),
                'view2' => view('front.includes.count-cart')->render()
            ]);
        } else {
            return response()->json([
                'res' => false,
                'message' => 'Impossible de modifier la quantité'
            ]);
        }
    }

    public function delete(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            return response()->json([
                'res' => true,
                'message' => 'Le produit a bien été supprimé',
            ]);
        } else {
            return response()->json([
                'res' => false,
                'message' => 'Impossible de modifier la quantité'
            ]);
        }
    }
}

