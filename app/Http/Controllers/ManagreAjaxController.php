<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManagreAjaxController extends Controller
{
    protected $post;
    protected $get;
    protected $request;

    public function __construct(request $request){
        $this->post = $request->input();
        $this->get = $request->query();
        $this->request = $request;
    }

    public function login(){
        $arr_return = array(
            'msg' => 0,
            'err_msg' => ''
        );
        //判斷帳號密碼是否為空
        $arr_return['err_msg'] = $this->post['arr_data']['username'] == '' || $this->post['arr_data']['password'] == ''?"帳號或密碼不可為空":"";

        if($arr_return['err_msg'] == ""){
            $data = DB::table('didipick_admin_account')
            ->where('user_account', $this->post['arr_data']['username'])
            ->where('user_password', md5($this->post['arr_data']['password']))
            ->get();
            $message = "";
            $msg = count($data);
            //判斷帳號密碼是否正確
            if($msg < 1){
                $message = "帳號或密碼錯誤！";
            }
            //判斷帳號狀態是否正確
            if(json_decode(json_encode($data), true)[0]['user_status'] == 0){
                    $msg = 0;
                    $message = "帳號已關閉，請聯絡管理員！";
            }
            $arr_return['msg'] = $msg;
            $arr_return['err_msg'] = $message;
        }
        $arr_return['msg'] == 1?$this->request->session()->put('user_data', $data):"";

        return $arr_return;
    }

    public function get_content(){
        return view($this->post['content'])->render();
    }

    public function get_admin_users(){
        $data = DB::table('didipick_admin_account')->get();
        return $data;
    }

    public function get_user_data(){
        return $this->request->session()->get('user_data');
    }

    public function get_product(){
        $data = DB::table('didipick_product')->get();
        return $data;
    }

    public function get_member(){
        $data = DB::table('didipick_member')->get();
        return $data;
    }

    public function switch_product_status(){
        DB::table('didipick_product')
        ->where('sno', $this->post['sno'])
        ->update(['status' => $this->post['status']]);
        $color = 'green';
        $status = "開啟";
        if($this->post['status'] == 0){
            $color = 'red';
            $status = "關閉";
        }
        $arr_return = array(
            'color' => $color,
            'status' => $status
        );
        return $arr_return;
    }

    public function delete_product(){
        DB::table('didipick_product')->where('sno', $this->post['sno'])->delete();
    }

    public function check_require_column(){
        
        $arr_return = array(
            'msg' => 1,
            'column' => '',
            'err_msg' => ''
        );
        foreach($this->post['form_data'] as $k => $v){
            if($v == ''){
                $arr_return['msg'] = 0;
                $arr_return['column'] = $k;
                $arr_return['err_msg'] = '不可為空';
                break;
            }
        }
        return $arr_return;
    }

    public function product_edit(){
        $post = $this->post;
        $post['sno'] == 'insert'?$this->product_data_insert($post):$this->product_data_update($post);
        return redirect('/managre/product');
    }

    private function product_data_insert($post){
        unset($post['sno']);
        unset($post['_token']);
        DB::table('didipick_product')->insert($post);
    }

    private function product_data_update($post){
        $sno = $post['sno'];
        unset($post['sno']);
        unset($post['_token']);
        DB::table('didipick_product')->where('sno', $sno)->update($post);
    }

}
