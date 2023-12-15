<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memory extends Model
{
    use HasFactory;

    public $fillable = ['text', 'image', 'verified', 'published'];

    public $casts = [
        'verified' => 'boolean',
        'published' => 'boolean',
    ];

    // add default scopes in booted method

    public function scopeVerified(Builder $query)
    {
        return $query->where('verified', true);
    }

    public function scopePublished(Builder $query)
    {
        return $query->where('published', true);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
