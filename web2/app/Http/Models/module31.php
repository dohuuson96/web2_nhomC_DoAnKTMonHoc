<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class module31 extends Model {

    protected $table = 'module31';
    protected $primaryKey = 'module31_id';
    public $timestamps = false;
    protected $fillable = [
        'module31_img',
    ];
    protected $guarded = ['module31_id'];

    public function getData() {
        return self::paginate();
    }

}
