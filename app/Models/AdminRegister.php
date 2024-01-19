<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AdminRegister extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    // Implement the necessary methods from Authenticatable
    public function getAuthIdentifierName()
    {
        return 'id'; // Assuming your primary key is named 'id'
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return null; // Not needed for your case
    }

    public function setRememberToken($value)
    {
        // Not needed for your case
    }

    public function getRememberTokenName()
    {
        // Not needed for your case
    }
}
