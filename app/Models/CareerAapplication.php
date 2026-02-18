<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerAapplication extends Model
{
    /** @use HasFactory<\Database\Factories\CareerAapplicationFactory> */
    use HasFactory;
    protected $fillable = [
    'career_id', 'name', 'email', 'phone', 'position',
    'qualification', 'experience', 'resume', 'cover_letter'
];

    public function career()
    {
        return $this->belongsTo(Career::class, 'career_id');
    }
}
