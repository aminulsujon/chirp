<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prattle extends Model
{
    use HasFactory;

    protected $fillable = [
        'message','chirp_id'
    ];

    // Connecting users to Prattle
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Connecting users to Prattle
    public function chirp()
    {
        return $this->belongsTo(Chirp::class);
    }
}
