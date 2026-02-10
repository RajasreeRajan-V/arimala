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
        'specialization',
        'department_id',
    ];

    public function department()
{
    return $this->belongsTo(Departments::class);
}

}
