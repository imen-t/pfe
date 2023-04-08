<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form3model extends Model
{
    use HasFactory;
    protected $fillable = [
        'box_id',
        'field1',
        'field2',
        'field3',
        'file'
    ];

    public function box()
    {
        return $this->belongsTo(Box::class);
    }
    
}
