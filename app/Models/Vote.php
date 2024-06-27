<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $table = "vote";

    protected $fillable = [
        'matric',
        'presidential_candidate',
        'vice_presidential_candidate',
        'general_secetary',
        'ass_general_secetary',
        'treasurer',
        'welfare',
        'ass_welfare',
        'sport',
        'ass_sport',
        'social',
        'ass_social',
        'financial_sec',
        'pro',
        'env',
        'chief_whip',
        'startup',
        'ass_startup',
    ];

     protected $casts = [
        'candidates' => 'array',
    ];
}
