<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenSource extends Model
{
    use HasFactory;

    protected $fillable = [
        'website-name',
        'thumbnail',
        'gif',
        'github_code',
        'website-link',
        'blog-link'
    ];
}
