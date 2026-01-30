<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'Id';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = ['Username', 'PasswordHash'];

    protected $hidden = ['PasswordHash'];

    // Informs Laravel which column is the password
    public function getAuthPassword()
    {
        return $this->PasswordHash;
    }

}
