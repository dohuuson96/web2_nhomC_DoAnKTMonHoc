<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use App\Http\Models\Footer;
use App\Http\Models\Buaan;
use App\Http\Models\Tieude;
use App\Http\Models\Gallery;
use App\Http\Models\Parallax;
use App\Http\Models\Form;
use App\Http\Models\Homemenu;

class HomeController extends BaseController {

//    private $object;
    private $objectform;
//    private $objectft;

    public function index() {



        //footer
        $objfooter = new Footer();

        $footer = $objfooter->get_footer();
        
        //footer
        $objbuaan = new Buaan();

        $buaans = $objbuaan->get_buaan();


        //homemenu
        $objhomemenu = new Homemenu();

        $homemenus = $objhomemenu->get_homemenu();

        //parallax
        $objgallery = new Gallery();

        $gallerys = $objgallery->get_gallery();
        
        //tieu de
        $objtieude = new Tieude();

        $tieudes = $objtieude->get_tieude();

        //parallax
        $objparallax = new Parallax();

        $parallaxs = $objparallax->get_parallax();

        //menu


        $data = array(
            'footers' => $footer,
            'parallaxs' => $parallaxs,
            'buaans' => $buaans,
            'gallerys' => $gallerys,
            'tieudes' => $tieudes,
            'homemenus' => $homemenus
        );


        return view('home.home', $data);

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
    
    public function add_test(Request $request) {
        $input = $request->all();

        $this->objectform = new Form();

        $tests = $this->objectform->add_test($input);

        return view('home.home');
    }

}
