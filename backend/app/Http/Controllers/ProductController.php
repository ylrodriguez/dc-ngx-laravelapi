<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    /**
     * Create a new ProductController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('jwt.auth', ['except' => ['getOffers', 'show', 'search']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $foundProducts = [];

        try {
            $q = $request->query('query');
            if($q && strlen($q) >= 3){
                $foundProducts = Product::select(
                DB::raw("`dc-products`.id, `dc-products`.name, `dc-products`.brand, `dc-products`.slug, `dc-categories`.name as category,
                MATCH (`dc-products`.`name`, `dc-products`.`brand`) AGAINST ( '".$q."*' in BOOLEAN MODE) AS name_relevance, 
                MATCH (`dc-categories`.`name`, `dc-categories`.`slug`) AGAINST ( '".$q."*' in BOOLEAN MODE) AS category_relevance"))
                ->join('dc-categories', 'dc-products.category_id', '=', 'dc-categories.id')
                ->whereRaw("MATCH (`dc-products`.`name`, `dc-products`.`brand`) AGAINST ( ? in BOOLEAN MODE) OR
                MATCH (`dc-categories`.`name`, `dc-categories`.`slug`) AGAINST ( ? in BOOLEAN MODE)", [ $q.'*', $q.'*'])
                ->orderBy('name_relevance', 'desc')
                ->orderBy('category_relevance', 'desc')
                ->skip(0)
                ->take(10)
                ->get();

                foreach ($foundProducts as $product){
                    $product->images;
                }
            }
            return response()->json([
                'success' => true,
                'message' => 'Products found',
                'foundProducts' => $foundProducts,
            ], 200);

        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error MySQL',
                'error' => $e,
            ], 400);
        }
    }

    /**
     * Display a listing of the products with offers.
     *
     * @return \Illuminate\Http\Response
     */
    public function getOffers()
    {
        try {
            $offers = Product::where('offerDiscount', '>', 0)->get();
            foreach ($offers as $offer) {
                $offer->images;
								$offer['quantity_images'] = count($offer->images);
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
            'message' => 'Offers retrieved.',
            'offers' => $offers,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        try {
            $product = Product::where('id', $id)->first();
            $product->images;

            if ($request->bearerToken()) {
                $user = auth()->user();
                if ($user) {
                    foreach ($user->products as $p) {
                        if ($p->id == $id) {
                            $product["quantityPurchase"] = $p->pivot->quantity;
                            break;
                        }
                    }
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
            'message' => 'Product retrieved.',
            'product' => $product,
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
