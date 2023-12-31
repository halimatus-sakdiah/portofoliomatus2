<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cruds extends Model
{
    use HasFactory;

    protected $fillable = [
        'idnumber', 'fullname', 'gender', 'address', 'emailaddress', 'phone'
    ];
}
