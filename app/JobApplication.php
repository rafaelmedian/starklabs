<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $fillable = [ "full_name", "years_experience", "email",
                          "location", "portfolio", "hourly_rate",
                          "availability", "description" ];
}
