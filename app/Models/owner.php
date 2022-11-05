<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class owner extends Model
{
    use HasFactory;
    protected $table = 'owners';
    protected $primaryKey = 'id';
    protected $fillable = ['fullname', 'address', 'contact'];
}
