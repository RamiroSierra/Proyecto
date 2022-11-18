<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventForSet extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "event_for_set";
}
