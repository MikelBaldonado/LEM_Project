<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityMun extends Model
{
    use HasFactory;
    protected $table = 'city_municipality_tbl';
    protected $primaryKey = 'city_mun_id';
    protected $fillable = ['city_mun_description', 'province_id'];
}
