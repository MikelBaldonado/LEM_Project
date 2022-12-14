<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class province extends Model
{
    use HasFactory;
    protected $table = 'province_tbl';
    protected $primaryKey = 'province_id';
    protected $fillable = ['province_description'];
}
