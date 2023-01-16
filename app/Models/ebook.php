<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ebook extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'title',
        'writer',
        'publisher',
        'category_book',
        'synopsis',
        'img_cover',
    ];
}
