<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $fillable = [
        'mapel'
    ];

    public function bab()
    {
        return $this->hasMany(Bab::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function fuzzy()
    {
        return $this->hasMany(Fuzzy::class);
    }


}
