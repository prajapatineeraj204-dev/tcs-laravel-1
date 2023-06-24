<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlacementApply extends Model
{
    use HasFactory;
    protected $table = 'placements_apply';
    protected $fillable = [
        'name',
        'email',
        'phone'
    ];
    public function education()
    {
        return $this->hasMany(Education::class);
    }

    public function experience()
    {
        return $this->hasMany(Experience::class);
    }
}
