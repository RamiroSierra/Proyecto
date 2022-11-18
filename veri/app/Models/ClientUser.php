<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientUser extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "client_user";
    protected $fillable = ['client_id','user_id'];
}
