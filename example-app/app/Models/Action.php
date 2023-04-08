<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Action { impact, due_date, is_complex, user_id, project_id}
 */

class Action extends Model
{
    use HasFactory;
    protected $fillable = [
        'impact',
        'due_date',
        'is_complex',
        'user_id',
        'project_id',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
