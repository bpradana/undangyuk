<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class, 'transactions', 'design_id', 'user_id');
    }
}
