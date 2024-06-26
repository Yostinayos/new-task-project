<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'project_id',
       
        'starting_date',
        'ending_date',
        'category_id'
       
    ];
    
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
