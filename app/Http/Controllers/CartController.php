<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Cart as Cart;
use Validator;


class CartController extends Controller
{

    public function index()
    {
        return view('cart');
    }

  //daikto pridejimas ir cart
    public function store(Request $request)
    {
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if (!$duplicates->isEmpty()) {
            return redirect('cart')->withSuccessMessage('Prekė jau yra jūsų krepšelyje!');
        }

        Cart::add($request->product_id, $request->name, 1, $request->price)->associate('App\Product');
        return redirect('cart')->withSuccessMessage('Prekė sėkmingai pridėta į krepšelį!');
    }

    //krepselio naujinimas
    public function update(Request $request, $id)
    {
        // maximalaus kiekio validavimas
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'
        ]);

        if ($validator->fails()) {
            session()->flash('error_message', 'Quantity must be between 1 and 5.');
            return response()->json(['success' => false]);
        }

        Cart::update($id, $request->quantity);
        session()->flash('success_message', 'Quantity was updated successfully!');

        return response()->json(['success' => true]);

    }

    //produkto salinimas
    public function destroy($product_id)
    {
        Cart::remove($product_id);
        return redirect('cart')->withSuccessMessage('Prekė pašalinta!');
    }

   //isvalyti krepseli
    public function emptyCart()
    {
        Cart::destroy();
        return redirect('cart')->withSuccessMessage('Krepšelis sėkmingai išvalytas!');
    }
}
