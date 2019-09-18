<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CartController extends Controller
{
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
            'products'=> $user
        ], 200);
    }
}
