<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
    protected $table = 'reviews';

    protected $fillable = [
        'username',
        'message',
        'rating',
    ];

    public function wisata()
    {
        return $this->belongsTo(Wisata::class);
    }
}
