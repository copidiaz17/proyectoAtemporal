<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Cliente extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = "cliente";

    protected $fillable = [
        'cliente_email',
        'cliente_contraseña', 
    ];

    protected $hidden = [
        'cliente_contraseña',
        'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->cliente_contraseña;
    }

    
    public function getAuthIdentifierName()
    {
        return 'cliente_email';
    }
}