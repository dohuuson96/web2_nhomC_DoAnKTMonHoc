<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class module28 extends Model {

    protected $table = 'module28';
    protected $primaryKey = 'module28_id';
    public $timestamps = false;
    protected $fillable = [
        'module28_tieude',
        'module28_chitiet',
         'module28_kvien',
        'module28_img1',
        'module28_img2',
        
    ];
    protected $guarded = ['module28_id'];

    public function getData() {
        return self::paginate();
    }

}


