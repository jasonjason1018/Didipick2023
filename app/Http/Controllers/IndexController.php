<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function ajax_index(){
        $arr_data = array(
            '0' => array(
                'id' => 'slider',
                'data' => view('Ajax.IndexBanner_ajax')->render(),
            ),
            '1' => array(
                'id' => 'master',
                'data' => view('Ajax.IndexMaster_ajax')->render(),
            ),
            '2' => array(
                'id' => 'oc-products',
                'data' => view('Ajax.IndexProduct20_ajax')->render(),
            ),
            '3' => array(
                'id' => 'posts',
                'data' => view('Ajax.IndexFeedback_ajax')->render(),
            ),
            '4' => array(
                'id' => 'brand',
                'data' => view('Ajax.IndexBrand_ajax')->render(),
            ),
        );
        return json_encode($arr_data);
    }


}
