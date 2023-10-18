<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'table_jobs';
//    protected $fillable = 'luong';
    use HasFactory;

    public function salarys(){
        return $this->hasMany('App\Models\Salary', 'id_mucluong');
    }
}
