<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App;
use DB;

class Gallery extends Model {

    protected $table = 'gallery';
    public $timestamps = false;
    protected $fillable = [
        'gallery_images1',
       
        'gallery_images2'
    ];
    protected $primaryKey = 'gallery_id';


    public function get_gallery() {

        $buaans = self::all();
        
        return $buaans;
    }

    public function add_test($input) {

        $buaan = self::create([
                    'gallery_images1' => $input['gallery_images1'],
                    'gallery_images2' => $input['gallery_images2'],
                    
        ]);

        return $buaan;
    }
}