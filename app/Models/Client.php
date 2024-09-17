<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'phoneNumber',
        'email',
    ];

    public function vehicle()
    {
        return $this->hasMany(Vehicle::class, 'client_id', 'id');
    }
}

