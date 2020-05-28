<?php

namespace App\Http\Controllers\WeatherAppControllers;

use App\Http\Controllers\Controller;
use App\WeatherAppModels\City;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Tymon\JWTAuth\Facades\JWTAuth;

class CityController extends Controller
{

    private $apiImagesOptions = [
        "client_id" => "rC4XQARI8t3xmzF8WHFW7_8chJt_pnmk1aTzAfc86jg",
        "orientation" => "landscape",
        "page" => "1",
        "query" => "",
    ];
    // id Image that shows that not image was found.
    private $defaultImgAPI = "xK4AyzC0itE";

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
    public function getCity(Request $request)
    {
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

    /**
     * Add to the users cities list
     * if city has not been created, it creates it
     */
    public function addCityInUserList(Request $request)
    {
        try {
            $user = JWTAuth::toUser($request->bearerToken());

            $name = $request->input('name');
            $countryCode = $request->input('countryCode');
            $country = $request->input('country');
            $slug = Str::slug($name . " " . $countryCode, '-');

            $city = City::where('slug', $slug)->first();

            // Checks that city it's not already in the users list
            foreach ($user->cities as $item) {
                if ($item->slug == $slug) {
                    return response()->json([
                        'success' => false,
                        'hasCityAlready' => true,
                        'message' => 'City already on the list',
                        'slug' => $slug,
                    ], 404);
                }
            }

            // Check if city exist in db. If it doesn't exists creates it.
            if (!$city) {
                $city = new City;
                $city->name = $name;
                $city->countryCode = $countryCode;
                $city->country = $country;
                $city->slug = $slug;
                $city->imgUrl = $this->getImageForCity($city);
                $city->save();
            }

            $user->cities()->attach($city);

        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error MySQL',
                'error' => $e,
            ], 400);
        }
        return response()->json([
            'success' => true,
            'message' => 'City added.',
            'city' => $city,
        ], 200);
    }

    /**
     * Method that calls unsplash API to get
     * an image of the city if it is found
     */

    private function getImageForCity(City $city)
    {
        try {
            $this->apiImagesOptions["query"] = $city->name . " " . $city->country . " landscape";
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', 'https://api.unsplash.com/search/photos', [
                'query' => $this->apiImagesOptions,
            ]);

            $img = json_decode($response->getBody())->results[0];

            // Esto indica que no se encontro imagen para la ciudad
            if ($img->id === $this->defaultImgAPI) {
                return "";
            } else {
                return ($img->urls->regular);
            }
        } catch (Exception $e) {
            return "";
        }

    }
}
