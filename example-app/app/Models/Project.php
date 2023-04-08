<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'location',
        'project_leader',
        'project_type',
        'target_improve',
        'problem_description',
        'problem_analysis',
        'conclusion',
        'commentaire',
        'unresolved_issues',
    ];
        /**
     * The users that belong to the role.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
     /**
     * Get the actions for the blog post.
     */
    public function actions(): HasMany
    {
        return $this->hasMany(Action::class);
    }
     /**
     * Get the files for the blog post.
     */
    public function files(): HasMany
    {
        return $this->hasMany(File::class);
    }
}
