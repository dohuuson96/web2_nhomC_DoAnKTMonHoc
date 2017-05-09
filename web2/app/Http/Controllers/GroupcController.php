<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use App\Http\Models\module31;
use App\Http\Models\module32;
use App\Http\Models\module30;
use App\Http\Models\module29;
use App\Http\Models\module28;
use App\Http\Models\module27;

class GroupcController extends BaseController {

//    private $object;
//    private $objectform;
//    private $objectft;

    public function index() {

         $obj5 = new module27();
        $newdata5 = $obj5->getData();
        
        $obj = new module31();
        $newdata = $obj->getData();

        $obj1 = new module32();
        $newdata1 = $obj1->getData();

        $obj2 = new module30();
        $newdata2 = $obj2->getData();

        $obj3 = new module29();
        $newdata3 = $obj3->getData();
        
        $obj4 = new module28();
        $newdata4 = $obj4->getData();


        return view('about.about', array(
            'newdata' => $newdata, 
            'newdata1' => $newdata1, 
            'newdata2' => $newdata2, 
            'newdata3' => $newdata3,
            'newdata4' => $newdata4,
            'newdata5' => $newdata5
                ));
    }

}
