<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'enrollment',
        'generation',
        'classroom',
        'final_grade',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
