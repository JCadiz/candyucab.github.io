<?php

namespace App\Http\Controllers\NaturalAuth;

use App\Natural;
use App\Lugar;
use App\Telefono;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/natural/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('natural.guest');
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:naturals',
            'password' => 'required|min:8|confirmed|max:16',
            'rif'=> 'required',
            'cedula'=> 'required',
            'Pnombre' => 'required',
            'Snombre' => 'required',
            'Papellido' => 'required',
            'Sapellido' => 'required',
            'estado' => 'required',
            'municipio' => 'required',
            'parroquia' => 'required',
            'numero' => 'required',
            'numeroC' => 'required|min:16',
            'nombreC' => 'required',
            'cv' => 'required|min:3',
            'vencimiento' => 'required'
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Natural
     * @return Lugar
     * @return Telefono
     */
    protected function create(array $data)
    {   /*
        return Natural::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'rif' => $data['rif'],
            'cedula' => $data['cedula'],
            'Pnombre' => $data['Pnombre'],
            'Snombre' => $data['Snombre'],
            'Papellido' => $data['Papellido'],
            'Sapellido' => $data['Sapellido'],
        ]); */

            DB::transaction(function() use ($data){
            $natural = Natural::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'rif' => $data['rif'],
                'cedula' => $data['cedula'],
                'Pnombre' => $data['Pnombre'],
                'Snombre' => $data['Snombre'],
                'Papellido' => $data['Papellido'],
                'Sapellido' => $data['Sapellido'],
            ]);

            Telefono::create([
                'numero' => $data['numero'],
                'fk_naturals' => $natural->id,
            ]);

            $i = 0;
            while ($i < 3) {
                if ($i == 0) {
                    Lugar::create([
                        'nombre' => $data['estado'],
                        'tipo' => 'Estado',
                        'fk_lugar' => $natural->id,
                    ]);
                } else if ($i == 1) {
                    Lugar::create([
                        'nombre' => $data['municipio'],
                        'tipo' => 'Municipio',
                        'fk_lugar' => $natural->id,
                    ]);
                } else {
                    Lugar::create([
                        'nombre' => $data['parroquia'],
                        'tipo' => 'Parroquia',
                        'fk_lugar' => $natural->id,
                    ]);
                }
            }
            });


       //  return redirect()->route('natural.home');

    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $lugares = Lugar::get();

        return view('natural.auth.register', compact('lugares'));
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('natural');
    }
}
