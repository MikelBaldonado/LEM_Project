<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class owner extends Model
{
    use HasFactory;
    protected $table = 'owner_tbl';
    protected $primaryKey = 'owner_id';
    protected $fillable = ['owner_fname', 'owner_lname', 'owner_address', 'owner_contact_number', 'user_id'];
}
