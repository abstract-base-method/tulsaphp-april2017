<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 4/15/17
 * Time: 5:39 PM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class DemoController
{
    public function index(Request $request)
    {
        return json_encode($request->all());
    }

    public function demo(Request $request)
    {
        return view('demo', [
            'user' => $request->get('user', 'presenter')
        ]);
    }
}