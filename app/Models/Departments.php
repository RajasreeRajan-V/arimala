<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    /** @use HasFactory<\Database\Factories\DepartmentsFactory> */
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image',
        'subtagline1_title',
        'subtagline1_description',
        'subtagline2_title',
        'subtagline2_description',
        'subtagline3_title',
        'subtagline3_description',
        'subtagline4_title',
        'subtagline4_description',
    ];
}
