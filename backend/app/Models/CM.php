<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class CM extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cm',
        'QC',
        'dayStart',
        'timeStart',
        'dayFinish',
        'timeFinish'
    ];

    public function user() {
        return $this->BelongsTo(User::class);
     }
}
