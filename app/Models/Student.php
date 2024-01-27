<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public static function boot()
    {
        parent::boot();
    }

    public function examStudent()
    {
        return $this->hasMany(Exam::class);
    }

    public function fuzzy()
    {
        return $this->hasMany(Fuzzy::class);
    }
}

// class Student extends Model
// {
//     use HasFactory;

//     protected $fillable = [
//         'user_id',
//         'nisn',
//         'name',
//         'username',
//         'password',
//         'kelas',
//         'gender',
//         'address',
//     ];

//     public static function boot()
//     {
//         parent::boot();
//     }

//     public function user(){
//         return $this->belongsTo(User::class, 'user_id');
//     }

//     public function examStudent()
//     {
//         return $this->hasMany(Exam::class);
//     }

//     public function fuzzy()
//     {
//         return $this->hasMany(Fuzzy::class);
//     }
// }
