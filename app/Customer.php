<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ["bot_id", "full_name", "company_name", "email", "location"];
}
