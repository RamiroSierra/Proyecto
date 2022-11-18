<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\DB;
use App\Models\ClientUser;
use App\Models\User;
use App\Models\External;
use App\Models\Standard;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use \Illuminate\Database\QueryException;


class UserController extends Controller
{
    public function Create(Request $request){
        $validator = Validator::make($request->all(),[
            'nombre' => 'required',
            'apellido' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|min:6'
        ]);

        if ($validator -> fails())
            return $validator->errors()->toJson();

        if($request -> post("password") !== $request -> post("password_confirmation"))
            return [ "password" => "La contrasenas no coinciden"];

        try {
            $user = User::create([
                'name' => $request -> post("name"),
                'email' => $request -> post("email"),
                'password' => Hash::make($request -> post("password"))
            ]);
            $client = Client::create([
                'nombre' => $request -> post("name"),
                'apellido' => $request -> post("apellido")
            ]);
            $external = External::create([
                'client_id' => $client->id
            ]);
            ClientUser::create([
                'user_id' => $user->id,
                'client_id' => $client->id
            ]);
            
            Standard::create([
                'client_id' => $external->client_id
            ]);
            return true;
        }

        catch (QueryException $e){
            DB::rollBack();
            return [
                "error" => 'El usuario ' . $request->post("name") . ' ya existe',
                "trace" => $e -> getMessage()
            ];
        }
    }

    public function Authenticate(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required|min:6'
        ]);

        if ($validator->fails())
            return $validator->errors()->toJson();

        $credentials = $request->only('email', 'password');

        if(!Auth::attempt($credentials))
            return false;

        return true;
    }
}