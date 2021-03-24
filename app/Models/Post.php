<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function getImageAttribute()
    {
        return $this->pimage ? asset('storage/img/blog/' . $this->pimage) : asset('assets/img/holder/default-thumbnail.jpg');
    }
}
