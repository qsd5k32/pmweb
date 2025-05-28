<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'Users'; // Make sure this matches your actual table name
    protected $primaryKey = 'Id';
    public $timestamps = false;
    
    protected $fillable = [
        'Username', 'Email', 'FirstName', 'LastName', 'Password'
    ];

    protected $hidden = [
        'Password', 'APIRestToken', 'tmpToken'
    ];

    // Customize the password attribute name
    public function getAuthPassword()
    {
        return $this->Password;
    }
    
    // Handle the last login update
    public function touchLastLogin()
    {
        $this->LastLoginDate = now();
        $this->PreviousLoginDate = $this->LastLoginDate;
        $this->IPAddress = request()->ip();
        return $this->save();
    }
    
    // Method to check if account is locked or disabled
    public function isActive()
    {
        return !$this->IsLockedOut && !$this->IsDisabled;
    }
}