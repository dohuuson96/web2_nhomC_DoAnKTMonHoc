<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use App\Http\Models\Tests;
use App\Http\Models\Footer;
use App\Http\Models\Menu;
use App\Http\Models\Tieude;
use App\Http\Models\Thucdon;
use App\Http\Models\Parallax;

class MenuController extends BaseController {

//    private $object;
//    private $objectform;
//    private $objectft;

    public function index() {

        //tests
        $obj = new Tests();

        $tests = $obj->get_test();


        //footer
        $objfooter = new Footer();

        $footer = $objfooter->get_footer();


        //tieu de
        $objtieude = new Tieude();

        $tieudes = $objtieude->get_tieude();

        //thuc don

        $objthucdon = new Thucdon();

        $thucdons = $objthucdon->get_thucdon();

        //parallax
        $objparallax = new Parallax();

        $parallaxs = $objparallax->get_parallax();

        //menu
        $objmenu = new Menu();

        $menu = $objmenu->get_menu();

        $data = array(
            'tests' => $tests,
            'footers' => $footer,
            'menus' => $menu,
            'tieudes' => $tieudes,
            'thucdons' => $thucdons,
            'parallaxs' => $parallaxs
        );


        return view('menu.menu', $data);

//        $this->object = new Tests();
//
//        $tests = $this->object->get_test();
//        
//        $this->objectft = new Footer();
//
//        $testsft = $this->objectft->get_footer();
//        
//        return view('hson.index')->with(['tests' => $tests,'footers' => $testsft]);
    }

}
