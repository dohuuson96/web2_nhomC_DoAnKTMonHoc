<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class module29 extends Model {

    protected $table = 'module29';
    protected $primaryKey = 'module29_id';
    public $timestamps = false;
    protected $fillable = [
        'module29_tieude',
        
    ];
    protected $guarded = ['module29_id'];

    public function getData() {
        return self::paginate();
    }

}

