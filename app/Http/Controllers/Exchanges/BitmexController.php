<?php

namespace App\Http\Controllers\Exchanges;

use Illuminate\Http\Request;

class BitmexController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        dd($request->getMethod());
    }
}