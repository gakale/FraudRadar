<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Categorie extends Model
{
    use HasFactory;

    use Sluggable;

    protected $fillable = [
        'name',
        'description',
        'image',
        'slug',
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

    public function frauds()
    {
        return $this->hasMany(Fraud::class);
    }

}
