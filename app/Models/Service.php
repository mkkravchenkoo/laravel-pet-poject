<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "sub_title",
        "icon",
        "thumbnail",
        "slug",
        "excerpt",
        "body",
    ];
    public function teams(){
        return $this->hasMany(Team::class);
    }
}
