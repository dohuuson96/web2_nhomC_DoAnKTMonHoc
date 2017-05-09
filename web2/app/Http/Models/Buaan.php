<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App;
use DB;

class Buaan extends Model {

    protected $table = 'buaan';
    public $timestamps = false;
    protected $fillable = [
        'buaan_ba',
       
        'buaan_thoigian'
    ];
    protected $primaryKey = 'buaan_id';


    public function get_buaan() {

        $buaans = self::all();
        
        return $buaans;
    }

    public function add_test($input) {

        $buaan = self::create([
                    'buaan_ba' => $input['buaan_ba'],
                    'buaan_thoigian' => $input['buaan_thoigian'],
                    
        ]);

        return $buaan;
    }
}