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
    /**
     * @var Request
     */
    private $request;

    /**
     * DemoController constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * __destruct
     */
    public function __destruct()
    {
        $this->request = null;
    }

    /**
     * @param Request $request
     * @return string
     */
    public function index(Request $request)
    {
        return json_encode($request->all());
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function demo(Request $request)
    {
        return view('demo', [
            'user' => $request->get('user', 'presenter')
        ]);
    }
}