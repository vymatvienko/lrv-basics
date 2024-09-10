<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = [
        'group_id',
        'surname',
        'name',
    ];

    public function group() 
    {
        return $this->belongsTo(Group::class);
    }

}
