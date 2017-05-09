<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class module30 extends Model {

    protected $table = 'module30';
    protected $primaryKey = 'module30_id';
    public $timestamps = false;
    protected $fillable = [
        'module30_gd',
        'module30_tende',
        'module30_dienta',
    ];
    protected $guarded = ['module30_id'];

    public function getData() {
        return self::paginate();
    }

}
