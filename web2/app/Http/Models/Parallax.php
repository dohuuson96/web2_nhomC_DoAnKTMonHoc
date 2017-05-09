<?php 

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App;
use DB;

class Parallax extends Model {

    protected $table = 'parallax';
    public $timestamps = false;
    protected $fillable = [
        'parallax_title'   
    ];
    protected $primaryKey = 'parallax_id';



    public function get_parallax() {

        $tests = self::all();
        
        return $tests;
    }

    public function add_test($input) {

        $test = self::create([
                    'parallax_title' => $input['parallax_tittle'],
                    
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
