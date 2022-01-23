<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'type',
        'tags',
        'github',
        'link',
        'image',
        'published',
        'deleted'
    ];

    protected $attributes = [
        'published' => false,
        'deleted' => false
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}