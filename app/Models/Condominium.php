<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Condominium extends Authenticatable
{
    use HasFactory, Notifiable;
    
    protected $table = 'condominiums';

    protected $fillable = [
        'user_id',
        'name',
        'location',
        'employees',
        'incomes',
        'expenses',
        'utility',
    ];

    protected $hidden = [
        //
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
    
}
