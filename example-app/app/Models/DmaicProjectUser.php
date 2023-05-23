<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DmaicProjectUser extends Model
{
    use HasFactory;
    protected $table = 'dmaic_project_user';

    protected $fillable = [
        'user_id',
        'dmaic_project_id',
    ];
}
