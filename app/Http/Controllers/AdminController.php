<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminController extends Controller
{

    // ADMIN FUNCTION

    public function index() {




        $objects = Product::orderBy('created_at','DESC')->get();

        return view('back.admin' , [
            'objects' => $objects
        ]);

    }

    public function detailsProductAdmin(Product $product)
    {
    //    $object = Product::where('id', $id)->firstOrFail();
        return view('back.products.details', [
            'product' => $product
        ]);
    }

    public function edit(Product $product)
    {
        return view('back.products.edit', [
            'product' => $product
        ]);
    }

    public function update(CreateProductRequest $request, Product $product)
    {

        $product->update($request->validated());

        return redirect()->route('home_admin')->with('success','Produit modifié');
    }

    public function create() {
        return view('back.products.create');
    }

    public function store(CreateProductRequest $request)
    {
       $request->validate([$request->validated()]);

        Product::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'summary' => $request->summary,
            'text' => $request->text,
            'price' => $request->price,
            'quantity' => $request->quantity
        ]);

        return redirect()->route('home_admin')->with('success','Produit ajouté');
    }

    public function destroy($id) {
        $product = Product::where('id', $id)->firstOrFail();
        $product->delete();
        return redirect()->route('home_admin')->with('success','Produit Supprimé');
    }
}
