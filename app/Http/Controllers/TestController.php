<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function aesdec()
    {
        $priv_key = openssl_get_privatekey(file_get_contents(storage_path('keys/priv.key')));
        openssl_private_decrypt($enc_data,$dec_data,$priv_key);
        echo '解密：'.$dec_data;
    }

    public function sign(request $request){
        $key = "1911php";
        $data = $request->get("data");
        $sign = $request->get("sign");
        $sign_str1 = md5($data . $key);
        if($sign_str1 == $sign){
            echo "验签成功";
        }else{
            echo "验签失败";
        }

    }
    public function test2(){
        if(isset($_SERVER['HTTP_TOKEN'])){
            $uid = $_SERVER['HTTP_UID'];
            $token = $_SERVER['HTTP_TOKEN'];
        } else {
            echo '授权失败';
        }
        echo 'uid:'.$uid;echo '</br>';
        echo 'token:'.$token;echo '</br>';
    }


}
