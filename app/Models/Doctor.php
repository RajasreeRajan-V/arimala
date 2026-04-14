<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    /** @use HasFactory<\Database\Factories\DoctorFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'qualification',
        'is_specialized',
        'sub_specialization',
        'department_id',
    ];

    protected $casts = [
        'is_specialized' => 'boolean',
    ];

    public function department()
{
    return $this->belongsTo(Departments::class);
}

}
