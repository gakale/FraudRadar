<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;

class Fraud extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'name', 'slug', 'description', 'category_id', 'user_id', 'status',
        'images', 'tags', 'video', 'url', 'likes', 'dislikes'
    ];


    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }
    protected $casts = [
        'images' => AsArrayObject::class,
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate' => true,
            ],
        ];
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes');
    }

    public function dislikes()
    {
        return $this->belongsToMany(User::class, 'dislikes');
    }

}
