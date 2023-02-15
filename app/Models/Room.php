<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function path()
    {
        return route('single.room',$this->slug);
    }
    protected $fillable = [
        'name',
        'slug',
        'user_id'
    ];
}
