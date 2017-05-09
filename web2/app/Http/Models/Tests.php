<?php 

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App;
use DB;

class Tests extends Model {

    protected $table = 'thucan';
    public $timestamps = false;
    protected $fillable = [
        'thucan_title',
        'thucan_name',
        'thuccan_price',
        'thucan_desc'
    ];
    protected $primaryKey = 'thucan_id';



    public function get_test() {

        $tests = self::all();
        
        return $tests;
    }

    public function add_test($input) {

        $test = self::create([
                    'thucan_title' => $input['thucan_tittle'],
                    'thucan_name' => $input['thucan_name'],
                    'thuccan_price' => $input['thuccan_price'],
                    'thucan_desc' => $input['thucan_desc'],
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
