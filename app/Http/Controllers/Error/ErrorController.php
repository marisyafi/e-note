<?php
/**
 * Created by PhpStorm.
 * User: Md Rasel Ahmed
 * Date: 03-Aug-16
 * Time: 11:00 AM
 */

namespace App\Http\Controllers\Error;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ErrorController extends Controller
{
    public function e404()
    {
        return view('errors.404');
    }

    public function e500()
    {
        return view('errors.500');
    }

    public function checkout()
    {
        return redirect('/');
    }
}
