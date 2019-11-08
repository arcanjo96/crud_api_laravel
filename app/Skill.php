<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['name'];
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $table = 'skills';
}
