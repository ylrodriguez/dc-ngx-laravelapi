<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Controller;
use Validator, DB, Hash;

use App\User;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','signup']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Incorrect username or password.'], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     *  Users signs up and redirects if process is valid to login method
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function signup(Request $request)
    {
        $credentials = $request->all();

        //Backend Validation
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|max:255|email|unique:users',
            'password' => 'required|min:6|',
            'address' => 'required|max:255',
            'number' => 'required|max:16',
            'dob' => 'required|date', //YYYY-MM-DD
        ];
        $validator = Validator::make($credentials, $rules);

        //Checks validation
        if($validator->fails()) {
            return response()->json([
                'success'=> false, 
                'error'=> $validator->messages()
                ]);
        }

        $password = $request->password;
        $confirmPassword = $request->confirmPassword;
        //Checks whether passwords matches or not
        if($password != $confirmPassword){
            return response()->json([
                'success'=> false, 
                'error'=> 'Password do not match.'
                ]);
        }

        $name = $request->name;
        $email = $request->email;
        $address = $request->address;
        $number = $request->number;
        $dob = $request->dob;
        
        try{
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'address' => $address,
                'password' => Hash::make($password),
                'number' => $number,
                'dob' => $dob,
            ]);
        }
        catch(QueryException  $e){
            return response()->json([
                'success'=> false, 
                'message'=> $e->errorInfo
            ], 400);
        }
        
       return $this->login($request);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}