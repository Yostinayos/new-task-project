<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
    ];
    public function projects(){
        return $this->hasMany(Project::class);
    }
    public function phones(){
        return $this->hasMany(CustomerPhone::class);
    }
        
}
