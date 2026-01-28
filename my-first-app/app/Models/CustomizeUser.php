<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomizeUser extends Model
{
    use HasFactory;

    protected $table = 'Users';
    protected $primaryKey = 'Id';
    protected $fillable = [
        'Username',
        'PasswordHash',
    ];
}
