<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Carts_items;
use App\Models\Carts;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart()
    {
        $title = "cart";

        $userId = Auth::user()->id;
        $cart = Carts::where('user_id', $userId)->first();

        $jumlahCart = $cart ? Carts_items::where('cart_id', $cart->id)->count() : 0;

        $cartItem = $cart ? Carts_items::where('cart_id', $cart->id)->get() : collect([]);

        return view('user.cart', compact('title', 'jumlahCart', 'cartItem'));
    }

    public function addCartItem(Request $request)
    {
        try {

            if (!Auth::check()) {
                return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu!');
            }

            $request->validate([
                'product_id' => 'required|exists:products,id',
                'product_qty' => 'required|integer|min:1|max:15',
                'sugar_value' => 'nullable|in:Less Sugar,Normal,Extra Sugar'
            ]);

            $idUser = Auth::user()->id;
            $product = Products::findOrFail($request->product_id);

            $cart = Carts::firstOrCreate(
                ['user_id' => $idUser],
                ['user_id' => $idUser]
            );

            $exitingItem = Carts_items::where('cart_id', $cart->id)
                ->where('product_id', $request->product_id)->where('sugar_level', $request->sugar_level)->first();

            $sugar_level = $request->sugar_level ?? 'Normal';

            $finalPrice = ($sugar_level === 'Extra Sugar') ? $product->price + 2000 : $product->price;
            $subtotal = $finalPrice * $request->product_qty;

            if ($exitingItem) {
                $exitingItem->qty += $request->product_qty;
                $exitingItem->subtotal = $exitingItem->price * $exitingItem->qty;
                $exitingItem->save();
            } else {
                $cartItem = Carts_items::create([
                    'cart_id' => $cart->id,
                    'product_id' => $request->product_id,
                    'qty' => $request->product_qty,
                    'sugar_level' => $request->sugar_level,
                    'price' => $finalPrice,
                    'subtotal' =>$subtotal,
                ]);
            }
            return redirect()->route('user.index');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal Menambahkan Data' . $e->getMessage());
        }
    }
}
