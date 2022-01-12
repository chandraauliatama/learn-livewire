<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stopwatch extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['timedetail'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
