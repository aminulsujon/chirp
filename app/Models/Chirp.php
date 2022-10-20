<?php

namespace App\Models;

use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;

    // Mass assignment protection
    protected $fillable = [
        'message',
    ];

    // Dispatching the event
    protected $dispatchesEvents = [
        'created' => ChirpCreated::class,
    ];

    // Connecting users to Chirps
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Creating a prattles to Chirps
    public function prattles()
    {
        return $this->hasMany(Prattle::class, 'chirp_id');
    }
}
