<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Action { impact, due_date, is_complex, user_id, project_id}
 */

class Action extends Model
{
    use HasFactory;
 /**
  * (bool) is_complex if true link to dmaic
  */
    protected $fillable = [
        'title',
        'impact',
        'due_date',
        'start_date',
        'is_complex',
        'user_id',
        'project_id',
        'status'
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Get the dmaicProject associated with the Action
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function dmaicProject(): HasOne
    {
        return $this->hasOne(dmaicProject::class);
    }
}
