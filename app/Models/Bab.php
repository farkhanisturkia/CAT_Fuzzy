<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bab extends Model
{
    use HasFactory;

    protected $fillable = [
        'mapel_id',
        'nama'
    ];

    public function mapel(){
        return $this->belongsTo(Mapel::class, 'mapel_id');
    }

    public function question()
    {
        return $this->hasMany(Question::class);
    }
}

