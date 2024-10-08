<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    use HasFactory;
    protected $table = 'groups';
    protected $fillable = [
        'id',
        'title',
        'start_from',
        'is_active',
    ];

    public function students() 
    {
        return $this->hasMany(Students::class, 'group_id', 'id');
    }
}
