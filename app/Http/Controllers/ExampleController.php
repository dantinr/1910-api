<?php

namespace App\Http\Controllers;
use App\Model\UserModel;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function test()
    {
        $list = UserModel::limit(5)->get();
        echo '<pre>';print_r($list->toArray());echo '</pre>';
    }

    //
}
