<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $table = 'table_employers';
    protected $fillable = ['id', 'ten','masothue', 'diachi','phone', 'email','website', 'loaihinhhoatdong','thongtin', 'thongdiep','id_user', 'avt','banner'];
    use HasFactory;
}
