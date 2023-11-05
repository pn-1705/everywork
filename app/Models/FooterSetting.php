<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterSetting extends Model
{
    protected $table = 'table_settings';
    protected $fillable = ['logo','name', 'phone', 'slogan', 'address', 'email'];
    use HasFactory;
}
