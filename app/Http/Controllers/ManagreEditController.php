<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManagreEditController extends Controller
{
    protected $post;
    protected $get;
    protected $request;

    public function __construct(request $request){
        $this->post = $request->input();
        $this->get = $request->query();
        $this->request = $request;
    }

    public function product(){
        $arr_return['view'] = view('Admin.Edit.product')->render();
        $arr_return['data'] = "";
        if($this->post['sno'] != ''){
            $data = DB::table('didipick_product')->where('sno', $this->post['sno'])->get();
            //$arr_return['data'] =
            $arr_return['data'] = $data[0];
        }
        $arr_return['product_number'] = DB::table('didipick_product')->max('number') + 1;
        $arr_return['select']['brand'] = DB::table('didipick_brand')->select('sno', 'name')->get();
        $arr_return['select']['category'] = DB::table('didipick_category')->select('sno', 'name')->get();
        return $arr_return;
    }

    public function member(){
        $arr_return['view'] = view('Admin.Edit.member')->render();
        $arr_return['data'] = "";
        $data = DB::table('didipick_member')->where('id', $this->post['sno'])->get()[0];
        $account_data = DB::table("didipick_member_account")->select('balance', 'feedback')->where('id', $this->post['sno'])->get()[0];
        $arr_return['data'] = array_merge(json_decode(json_encode($data), true), json_decode(json_encode($account_data), true));

        return $arr_return;
    }


}
