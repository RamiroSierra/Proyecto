<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\publicidad;
use Illuminate\Support\Facades\DB;

class PublicidadController extends Controller
{
    public function lector()
    {
          $URLS = DB::table('publicities')
          ->whereNull('publicities.deleted_at')
          ->get('URL');
          return $URLS;

    }
}
