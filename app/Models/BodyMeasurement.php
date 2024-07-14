<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodyMeasurement extends Model
{
    use HasFactory;
    protected $table = 'body_measurements';

    protected $primaryKey = 'measurement_id';

    protected $fillable = [
        'user_id',
        'height',
        'weight',
        'bust',
        'under_bust',
        'waist',
        'hips',
        'inseam',
        'shoulder_width',
        'sleeve_length',
        'foot_size',
        'concerns',
    ];

    protected $casts = [
        'concerns' => 'array',
    ];
}
