<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DatosController extends Controller
{
    public function Index (){
        $receiverSports = Http::get('http://localhost:8001/api/Sports');
        $sports = json_decode($receiverSports,true);

        $receiverLeagues = Http::get('http://localhost:8001/api/Leagues');
        $leagues = json_decode($receiverLeagues,true);

        return view("index",compact('sports', 'leagues'));

    }

    public function Sport($sport){
        $consultDataSport = Http::get('http://localhost:8001/api/dataSport/'.$sport);
        $dataSports = json_decode($consultDataSport,true);

        $consultLeagueForSport = Http::get('http://localhost:8001/api/dataLeaguesForSport/'.$sport);
        $leagueForSport = json_decode($consultLeagueForSport,true);

        return view("sport",compact('dataSports','leagueForSport')); 
    }

    public function League($league){
        $consultDataLeague = Http::get('http://localhost:8001/api/dataLeague/'.$league);
        $dataLeagues = json_decode($consultDataLeague,true);
        return view("league",compact('dataLeagues')); 
    }

    public function Create (Request $request){
        $response = Http::post('http://localhost:8004/api/user',[
            'name'=> $request->post('name'),
            'email'=> $request->post('email'),
            'nombre'=> $request->post('nombre'),
            'apellido'=> $request->post('apellido'),
            'password'=> $request->post('password'),
            'password_confirmation'=> $request->post('password_confirmation'),
        ]);
        $var = json_decode($response,true);
        if($var==1)
            return redirect()->route('Login');

        return back();
        
    }

    public function Autenticacion (Request $request){
        $response = Http::post('http://localhost:8004/api/auth',[
            'email'=> $request->post('email'),
            'password'=> $request->post('password'),
        ]);

        $var = json_decode($response,true);

        if($var==1)
            return redirect()->route('Index');

        return back();
        
    }



}
