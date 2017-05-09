<?php 

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App;
use DB;

class Thucdon extends Model {

    protected $table = 'thucdon';
    public $timestamps = false;
    protected $fillable = [
        'thucdon_title',
        'thucdon_name',
        'thucdon_price',
        'thucdon_desc'
    ];
    protected $primaryKey = 'thucdon_id';



    public function get_thucdon() {

        $tests = self::all();
        
        return $tests;
    }

    public function add_test($input) {

        $test = self::create([
                    'thucdon_title' => $input['thucdon_tittle'],
                    'thucdon_name' => $input['thucdon_name'],
                    'thucdon_price' => $input['thucdon_price'],
                    'thucdon_desc' => $input['thucdon_desc'],
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
