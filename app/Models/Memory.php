<?php

namespace App\Models;

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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
