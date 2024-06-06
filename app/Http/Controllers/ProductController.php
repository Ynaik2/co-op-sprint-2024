<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function show($id, $slug)
    {

        $product = Product::where('id', $id)
            ->where('slug', $slug)
            ->firstOrFail();

        // Pass the product to the view
        return view('product.show', [
            'product' => $product,
        ]);
    }
}
