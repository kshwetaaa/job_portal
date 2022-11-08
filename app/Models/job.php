<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;

    protected $fillable = ['id','name','image','company','vacancy','qualification','description','category_id'];


    public function category(){
       return $this->belongsTo(category::class);
    }

    public function application(){
        return $this->hasMany(application::class);
    }
}
