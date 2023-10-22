<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'table_jobs';
//    protected $fillable = 'luong';
    use HasFactory;

    protected $fillable = ['id_nganhnghe', 'tencongviec', 'noilamviec', 'diachilamviec', 'mota',
        'yeucau', 'donvitien', 'minluong', 'maxluong', 'hinhthuc', 'hannhanhoso', 'phucloi', 'gioitinh', 'minold', 'maxold', 'kinhnghiem',
        'kn_tunam', 'kn_dennam', 'bangcap', 'capbac', 'workforhome', 'link_youtube',
        'img_banner', 'id_nhatuyendung', 'trangthai', 'tenkhongdau', 'created_at', 'updated_at'];


    public function salarys()
    {
        return $this->hasMany('App\Models\Salary', 'id_mucluong');
    }

    public function benefit()
    {
        return $this->hasOne('App\Models\Benefit', 'phucloi');
    }
}
