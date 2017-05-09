<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App;
use DB;

class Footer extends Model {

    protected $table = 'footer';
    public $timestamps = false;
    protected $fillable = [
        'footer_title',
        'footer_name',
        'footer_images',
        'footer_menu'
    ];
    protected $primaryKey = 'footer_id';


    public function get_footer() {

        $footers = self::all();
        
        return $footers;
    }

    public function add_test($input) {

        $footer = self::create([
                    'footer_title' => $input['footer_title'],
                    'footer_name' => $input['footer_name'],
                    'footer_images' => $input['footer_images'],
                    'footer_menu' => $input['footer_menu'],
        ]);

        return $footer;
    }
}