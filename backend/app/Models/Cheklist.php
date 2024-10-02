<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Mission;

class Cheklist extends Model
{
    use HasFactory;

    protected $fillable =['user_id', 'mission_id','Done/Ongoing'];

    public function user() {
       return $this->BelongsTo(User::class);
    }

    public function mission() {
        return $this->BelongsTo(Mission::class);
     }


}
