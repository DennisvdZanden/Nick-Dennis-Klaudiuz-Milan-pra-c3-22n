<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    public function teams()
    {
        $tournaments = Tournament::with('teams')->get();

        return $this->hasMany(Team::class);
    }
}
