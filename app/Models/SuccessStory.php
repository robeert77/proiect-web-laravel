<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuccessStory extends Model
{
    public function user()
    {
        return $this->belongsTo(Member::class);
    }
}
