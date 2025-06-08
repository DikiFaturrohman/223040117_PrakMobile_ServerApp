<?php

// app/Models/EWaste.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EWaste extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'description',
        'imageUrl',
        'disposalMethod',
    ];
}