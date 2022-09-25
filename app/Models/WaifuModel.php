<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaifuModel extends Model
{
    use HasFactory;
    protected $table = 'waifu';

    protected $fillable = [
        'waifu',
        'anime'
    ];
}
