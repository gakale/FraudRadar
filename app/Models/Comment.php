<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'fraud_id', 'user_id', 'content', 'like'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fraud()
    {
        return $this->belongsTo(Fraud::class);
    }


    
}
