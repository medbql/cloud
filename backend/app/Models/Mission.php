<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Cheklist;

class Mission extends Model
{
    use HasFactory;

    protected $fillable =[
        'mission',
        'locality'
    ];

    public  function checklists() {
        return $this->HasMany(Cheklist::class);
    }
}
