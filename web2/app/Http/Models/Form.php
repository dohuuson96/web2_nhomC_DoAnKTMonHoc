<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App;
use DB;

class Form extends Model {

    protected $table = 'form';
    public $timestamps = false;
    protected $fillable = [
        'form_email',
        'form_message',
        'form_name',
        'form_sb'
    ];
    protected $primaryKey = 'form_id';

//    protected $guarded = ["thucan_id"];

    public function add_test($input) {

        $test = self::create([
                    'form_email' => $input['form_email'],
                    'form_message' => $input['form_message'],
                    'form_name' => $input['form_name'],
                    'form_sb' => $input['form_sb'],
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
