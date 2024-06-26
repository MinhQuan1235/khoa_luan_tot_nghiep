<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $fillable = [
        'name',
        'user_id',
    ];
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    use HasFactory;
}
