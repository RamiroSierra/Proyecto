<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Sport;
use App\Models\League;
use Illuminate\Http\Request;

class DatosController extends Controller
{
    public function Sports (){
        $sports = Sport::all();
        return $sports;
    }
    public function Leagues (){
        $leagues = League::all();
        return $leagues;
    }
    public function DataSport ($sport){
        $dataSport = DB::table('sports')
        ->join('league_sport','sports.id','league_sport.sport_id')
        ->join('leagues','league_sport.league_id','leagues.id')
        ->join('league_team','league_team.league_id','leagues.id')
        ->join('teams','teams.id','league_team.league_id')
        ->join('locals','locals.team_id','teams.id')
        ->join('visits','visits.team_id','teams.id')
        ->join('events','events.id','locals.event_id')
        ->join('event_for_point','event_for_point.event_id','events.id')
        ->join('for_points','for_points.id','event_for_point.for_point_id')
        ->whereNull('sports.deleted_at')
        ->whereNull('leagues.deleted_at')
        ->where('sports.id',$sport)
        ->select('puntos_visita','puntos_local')
        ->get();

        return $dataSport;
        
    }

    public function DataLeaguesForSport ($sport){
        $dataLeaguesForSport = DB::table('sports')
        ->join('league_sport','sports.id','league_sport.sport_id')
        ->join('leagues','league_sport.league_id','leagues.id')
        ->whereNull('sports.deleted_at')
        ->whereNull('leagues.deleted_at')
        ->where('sports.id',$sport)
        ->select('leagues.id','leagues.nombre')
        ->get();

        return $dataLeaguesForSport;
        
    }

    public function DataLeague ($league){
        $dataLeague = DB::table('leagues')
        ->join('league_team','league_team.league_id','leagues.id')
        ->join('teams','teams.id','league_team.team_id')
        ->whereNull('leagues.deleted_at')
        ->whereNull('teams.deleted_at')
        ->where('leagues.id',$league)
        ->select('teams.nombre as nombre')
        ->get();

        return $dataLeague;
    }

    public function EventsForPointsLocal(){
        $dataTeamLocal = DB::table('for_points')
        ->join('event_for_point','for_points.id','event_for_point.for_point_id')
        ->join('events','event_for_point.event_id','events.id')
        ->join('visits','visits.event_id','events.id')
        ->join('locals','locals.event_id','events.id')
        ->whereNull('for_points.deleted_at')
        ->select('puntos_visita','puntos_local')
        ->get();
        
        return $dataTeamLocal;
    }
    
}
