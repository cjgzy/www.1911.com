<?php

namespace App\Http\Controllers\Goods;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    //前台展示页面
    public function goodslist(){
        return view("goods.goodslist");
    }
    public function goodscart()
    {
        return view('goods.goodscart');
    }

}
