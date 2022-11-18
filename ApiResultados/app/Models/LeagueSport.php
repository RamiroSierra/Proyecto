<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeagueSport extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "league_sport";
}
