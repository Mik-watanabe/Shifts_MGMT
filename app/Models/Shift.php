<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    //
    protected $fillable = [
        'user_id', 'shift_date', 'shift_start', 'shift_end',
    ];
    public function user()
    {
        return $this->belongsTo("App\User");
    }
}
