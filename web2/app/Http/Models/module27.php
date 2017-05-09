<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class module27 extends Model {

    protected $table = 'module27';
    protected $primaryKey = 'module27_id';
    public $timestamps = false;
    protected $fillable = [
        'module28_title',
        'module28_img',
        
        
    ];
    protected $guarded = ['module27_id'];

    public function getData() {
        return self::paginate();
    }

}


