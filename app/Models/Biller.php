<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biller extends Model
{
    use HasFactory;
    protected $fillable = [];

    public function orders()
    {
        return $this->hasMany(order::class);
    }
}
