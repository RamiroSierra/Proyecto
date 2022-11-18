<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventForPoint extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "event_for_point";
}
