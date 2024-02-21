<?php

namespace App\Models;

use App\Support\ConfigCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    const MAIN_MENU_KEY = 'main-menu';

    protected $fillable = [
        'name',
        'value',
    ];

    public function scopeMenu($query)
    {
        return $query->where('name', self::MAIN_MENU_KEY)->first() ?? new Config(['name' => self::MAIN_MENU_KEY, 'value' => json_encode([])]);
    }

    public function newCollection(array $models = [])
    {
        return new ConfigCollection($models);
    }

    public function convertToArray()
    {
        $mainMenuItems = $this ? $this->value : json_encode([]);
        return json_decode($mainMenuItems);
    }

}
