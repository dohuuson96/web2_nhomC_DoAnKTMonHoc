<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App;
use DB;

class Homemenu extends Model {

    protected $table = 'homemenu';
    public $timestamps = false;
    protected $fillable = [
        'home_menu_tieude',
        'home_menu_tenthucan',
        'home_menu_gia',
        'home_menu_mota'
    ];
    protected $primaryKey = 'home_menu_id';

//    protected $guarded = ["thucan_id"];
    public function get_homemenu() {

        $homemenus = self::all();

        return $homemenus;
    }

    public function add_test($input) {

        $test = self::create([
                    'home_menu_tieude' => $input['home_menu_tieude'],
                    'home_menu_tenthucan' => $input['home_menu_tenthucan'],
                    'home_menu_gia' => $input['home_menu_gia'],
                    'home_menu_mota' => $input['home_menu_mota'],
        ]);

        return $test;
    }

//
//    public function search($test_id) {
//        $test = self::find($test_id);
//
//        return $test;
//    }
//    public function delete($test_id) {
//
//        $test = $this->search($test_id);
//
//        $test->delete();
//    }
}
