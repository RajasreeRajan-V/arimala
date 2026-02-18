<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    /** @use HasFactory<\Database\Factories\CareerFactory> */
    use HasFactory;
    protected $fillable = [
        'job_title',
        'imge',
        'description',
        'qualification',
        'due_date',
        'position',
        'jobtype',
    ];

    protected $casts = [
    'due_date' => 'date',
];

public function applications()
    {
        return $this->hasMany(CareerAapplication::class, 'career_id');
    }

}

