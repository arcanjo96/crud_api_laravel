<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = ['login', 'password'];
    protected $guarded = ['id', 'created_at', 'updated_at', 'remember_token'];
    protected $table = 'admins';
}
