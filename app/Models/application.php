<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class application extends Model
{
    use HasFactory;

    protected $fillable = ['id','name','email','address','contact','picture','description','user_id','job_id'];


    public function user(){
        return $this->belongsTo(user::class);
    }

    public function job(){
        return $this->belongsTo(job::class);
    }


}
