<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Bot extends Model
{
    protected $fillable = ["type", "estimated_budget", "description"];

    public function types() {
      return $this->hasMany("App\BotTypes", "bot_id", "id");
    }
}
