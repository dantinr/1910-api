<?php

namespace App\Http\Controllers\Goods;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * 获取商品接口
     */
    public function home()
    {
        $url = env("SHOP_HOST") . '/api/goods/index';
        $data = file_get_contents($url);        //获取商品数据
        $list = json_decode($data,true);

        $response = [
            'errno' => 0,
            'msg'   => 'ok',
            'data'  => [
                'goods' => $list['data']['list']
            ]
        ];

        return $response;
    }

}
