<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
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
    public function productsInCart(Request $request){
        try{
            $user = JWTAuth::toUser($request->bearerToken());
            $user->products;

            foreach ($user['products'] as $product){
                $product["quantityPurchase"] = $product->pivot->quantity;
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

    /**
     * 
     * Remove specific item in the user's cart
     * 
     */

     public function removeProductInCart( Request $request, $product_id){
        try{
            $user = JWTAuth::toUser($request->bearerToken());
            $user->products()->detach($product_id);
        }
        catch(Exception  $e){
            return response()->json([
                'success'=> false, 
                'message'=> 'Error Eliminando producto del carrito',
                'error'=> $e
            ], 400);
        }
            
        return response()->json([
            'success'=> true,
            'message'=> 'Product removed from cart.',
            'product_id' => $product_id
        ], 200);
     }


}
