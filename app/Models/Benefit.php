<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    use HasFactory;
    protected $table = 'table_benefits';
    protected $fillable = ['id', 'chedobaohiem', 'dulich', 'chedothuong', 'chamsocsuckhoe', 'daotao', 'tangluong',
        'laptop', 'phucap', 'xeduadon', 'dulichnuocngoai', 'dongphuc', 'congtacphi', 'phucapthuongnien', 'nghiphepnam',
        'clbthethao', 'created_at', 'updated_at'];
    public function job() {
        return $this->belongsTo('App\Models\Job');
    }
}
