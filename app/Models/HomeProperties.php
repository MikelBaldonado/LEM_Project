<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeProperties extends Model
{
    use HasFactory;
    protected $table = 'Home_Properties';
    protected $primaryKey = 'id';
    protected $fillable = ['propertyType', 'propertyLocation', 'propertyDescription', 'propertyPrice'];
}
