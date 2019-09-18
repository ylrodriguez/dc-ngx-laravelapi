<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CartController extends Controller
{

     /**
     * Create a new CartController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('jwt.auth');
    }

    /**
     * Display the products in the user's cart.
     *
     * @param  int  $user_id
     * @return \Illuminate\Http\Response
     */
    public function productsInCart($user_id){
        try{
            $user = User::find($user_id);
            $user->products;

            foreach ($user['products'] as $product){
                $product["quantity"] = $product->pivot->quantity;
                unset($product->pivot);
                $url = $product->images[0]->url;
                unset($product->images);
                $product["images"] = ["url" => $url]; 
            }
        }
        catch(Exception  $e){
            return response()->json([
                'success'=> false, 
                'message'=> 'Error MySQL',
                'error'=> $e
            ], 400);
        }

        return response()->json([
            'success'=> true,
            'message'=> 'Product retrieved.', 
            'items'=> $user['products']
        ], 200);
    }
}
