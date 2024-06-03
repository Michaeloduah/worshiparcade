<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required',
            'surname' => 'required',
            'phone_number' => 'required|unique:users,phone_number',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
            'martial_status' => 'nullable',
            'nationality' => 'nullable',
            'gender' => 'nullable',
            'dob' => 'nullable',
            'bio' => 'nullable',
            'image' => 'nullable|mimes:jpg,png,jpeg,mp4',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if (isset($data['image'])) {
            $imagePath = $data['image']->store('user_images', 'public');
        } else {
            $imagePath = NULL;
        }
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'martial_status' => $data['martial_status'],
            'nationality' => $data['nationality'],
            'gender' => $data['gender'],
            'dob' => $data['dob'],
            'bio' => $data['bio'],
            'image' => $imagePath,
        ]);
    }
}
