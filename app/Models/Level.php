<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $table = 'level';
    public $timestamps = false;
    protected $primaryKey = 'id_level';
    protected  $fillable = [
        'namelevel',
        'basic_salary',
        'available',
    ];
}
