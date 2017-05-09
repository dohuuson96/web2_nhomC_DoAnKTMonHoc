<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App;
use DB;

class Tieude extends Model {

    protected $table = 'tieude';
    public $timestamps = false;
    protected $fillable = [
        'tieude_title',
        'tieude_subtitle'      
    ];
    protected $primaryKey = 'tieude_id';


    public function get_tieude() {

        $footers = self::all();
        
        return $footers;
    }

    public function add_test($input) {

        $footer = self::create([
                    'tieude_title' => $input['tieude_title'],
                    'tieude_subtitle' => $input['tieude_subtitle'],
        ]);

        return $footer;
    }
}