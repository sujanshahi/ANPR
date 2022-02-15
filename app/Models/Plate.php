<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{
    use HasFactory;

    protected $table = 'plates';
    public $timestamps = true;

    protected $fillable = [
        'plate_number',
        'type',
        'created_at',
        'plate_image'

    ];
}
