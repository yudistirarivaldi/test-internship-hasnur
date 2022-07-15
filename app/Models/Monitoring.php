<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Monitoring extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'client',
        'project_leader',
        'start_date',
        'end_date',
        'progress',
    ];

}
