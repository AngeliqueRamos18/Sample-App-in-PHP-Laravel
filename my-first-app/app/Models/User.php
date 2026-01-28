<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Match your MSSQL table name
    protected $table = 'Users';

    // Match your MSSQL primary key
    protected $primaryKey = 'Id';

    // MSSQL uses CreatedAt, not Laravel's created_at/updated_at
    public $timestamps = false;

    // Columns you want to allow mass assignment
    protected $fillable = [
        'Username',
        'PasswordHash',
        'CreatedAt',
    ];

    // Hide sensitive fields when serializing
    protected $hidden = [
        'PasswordHash',
    ];

    /**
     * Override the default password column used by Laravel Auth.
     */
    public function getAuthPassword()
    {
        return $this->PasswordHash;
    }

    /**
     * If you want to use Username instead of Email for login.
     */
    public function username()
    {
        return 'Username';
    }
}
