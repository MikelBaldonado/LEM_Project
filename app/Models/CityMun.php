<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityMun extends Model
{
    use HasFactory;
    protected $table = 'city_muns';
    protected $primaryKey = 'id';
    protected $fillable = ['citymun_description'];
}
