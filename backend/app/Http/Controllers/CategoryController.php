<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

    /**
     * Create a new CategoryController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('jwt.auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::all('id', 'name', 'icon', 'slug');

        return response()->json([
            'success' => true,
            'message' => 'Categories retrieved.',
            'categories' => $categories,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $category_id)
    {
        try {
            $category = Category::find($category_id);

            foreach ($category->products as $product) {
                // $product["quantityPurchase"] = $product->pivot->quantity;
                unset($product->pivot);
                $url = $product->images[0]->url;
                unset($product->images);
                unset($product->updated_at);
                unset($product->created_at);
                unset($product->category_id);
                $product["images"] = ["url" => $url];
            }

            //Only if user is auth
            if ($request->bearerToken()) {
                $user = auth()->user();
                if ($user) {
                    //for each
                    foreach ($category->products as $product) {
                        foreach ($user->products as $p) {
                            if ($p->id == $product->id) {
                                $product["quantityPurchase"] = $p->pivot->quantity;
                                break;
                            }
                        }
                    } //End for each
                }
            }

        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error MySQL',
                'error' => $e,
            ], 400);
        }

        return response()->json([
            'success' => true,
            'message' => 'Categories retrieved.',
            'category_id' => $category_id,
            'categoryProducts' => $category->products,
        ], 200);
    }

}
