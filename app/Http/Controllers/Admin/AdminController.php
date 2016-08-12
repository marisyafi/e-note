<?php
/**
 * Created by PhpStorm.
 * User: Md Rasel Ahmed
 * Date: 03-Aug-16
 * Time: 11:00 AM
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function sample()
    {
        return view('layouts.sample');
    }
}
