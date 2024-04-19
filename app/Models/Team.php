<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }
}
