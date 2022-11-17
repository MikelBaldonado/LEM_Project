<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;
    protected $table = 'properties_tbl';
    protected $primaryKey = 'property_id';
    protected $fillable = ['property_type_id', 'property_title', 'property_price', 'property_province_id', 'city_mun_id', 'floor_area', 'lot_area', 'property_description', 'owner_id', 'property_image_id' ];
}

