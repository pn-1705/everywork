<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    use HasFactory;
    protected $table = 'table_jobseeker';
    protected $fillable = ['id','id_user','ten', 'email', 'phone','anhdaidien', 'gioitinh', 'diachi', 'ngaysinh', 'trangthai'];
}
