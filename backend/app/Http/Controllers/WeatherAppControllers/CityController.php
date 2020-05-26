<?php

namespace App\Http\Controllers\WeatherAppControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\WeatherAppModels\City;

class CityController extends Controller
{

    /**
     * Create a new CityController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('jwt.auth');
    }

    /**
     * Display specific city info by city's slug
     *
     */
    public function getCity(Request $request){
        try {
            $slug = $request->input('slug');
            $city = City::where('slug', $slug)->first();
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error MySQL',
                'error' => $e,
            ], 400);
        }
        return response()->json([
            'success' => true,
            'message' => 'City retrieved.',
            'city' => $city,
        ], 200);
    }

    /**
     * Display all the cities from an user
     *
     */
    public function getCitiesFromUser(Request $request)
    {
        try {
            $user = JWTAuth::toUser($request->bearerToken());
            $user->cities;
            foreach ($user['cities'] as $city) {
                unset($city->pivot);
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
            'message' => 'Cities retrieved.',
            'cities' => $user['cities'],
        ], 200);

    }
}
