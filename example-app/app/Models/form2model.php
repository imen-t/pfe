<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form2model extends Model
{
    use HasFactory;
    protected $table = 'a3_forms';
protected $fillable = ['box_id', 'rootcauses', 'DD', 'MM','YYYY','file'];
}
