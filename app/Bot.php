<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Bot extends Model
{
    protected $fillable = ["type", "estimated_budget", "description"];
}
