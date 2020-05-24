<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\UserDetail;
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
     *
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'birth_day_step' => ['bail', 'required', 'date_format:"d"'],
            'birth_month_step' => ['bail', 'required', 'date_format:"m"'],
            'year' => ['bail', 'required', 'date_format:"Y"'],
            'first_name' => ['bail', 'required', 'string', 'max:255'],
            'last_name' => ['bail', 'required', 'string', 'max:255'],
            'phone' => ['bail', 'required', 'phone'],
            'user_email' => ['bail', 'required', 'string', 'email', 'max:255', 'unique:users,email'],
            'user_password' => ['bail', 'required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        /* echo "<pre>";
        print_r($data);
        print_r(json_encode($data['id_step']));
        die; */
        $user = User::create([
            'name' => $data['first_name']. " ". $data['last_name'],
            'user_email' => $data['user_email'],
            'password' => Hash::make($data['user_password']),
        ]);
        
        UserDetail::create([
            'user_id'           => $user->id,
            'first_name'        => $data['first_name'],
            'last_name'         => $data['last_name'],
            'phone'             => $data['phone'],
            'birth_day'         => sprintf('%s-%s-%s', $data['year'], $data['birth_month_step'], $data['birth_day_step']),
            'country'           => @$data['country'],
            'city'              => @$data['city'],
            'postalcode'        => @$data['postalcode'],
            'identification'    => @json_encode($data['id_step']),
            'gender'            => @$data['gender'],
        ]);
        /* print_r($user->toarray());
        die; */
        return $user;
        
    }
}
