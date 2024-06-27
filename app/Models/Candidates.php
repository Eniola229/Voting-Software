<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Candidates extends Model
{
    use HasFactory;
    protected $table = "Candidates";

    protected $fillable = [
        "name",
        "avatar",
        "matricnumber",
        "position",
        "level",
    ];
}
