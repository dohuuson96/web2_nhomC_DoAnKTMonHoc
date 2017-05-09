<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App;
use DB;

class Menu extends Model {

    protected $table = 'menu';
    public $timestamps = false;
    protected $fillable = [
        'menu_images',
        'menu_dropdown',
        'menu_icon',
        'menu_bigic',
        'menu_condd'
    ];
    protected $primaryKey = 'menu_id';

    public function get_menu() {

        $menus = self::all();

        return $menus;
    }

    public function add_test($input) {

        $footer = self::create([
                    'menu_images' => $input['menu_images'],
                    'menu_dropdown' => $input['menu_dropdown'],
                    'menu_bigic' => $input['menu_bigic'],
                    'menu_condd' => $input['menu_condd'],
                    'menu_icon' => $input['menu_icon'],
        ]);

        return $footer;
    }

}
