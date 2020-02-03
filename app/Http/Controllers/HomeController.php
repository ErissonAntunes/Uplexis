<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCURL()
    {
        $response = Curl::to('http://www.uplexis.com.br/blog')
                            ->get();


        dd($response);
    }

    public function getCURL()

    {

    $response = Curl::to('http://www.uplexis.com.br/blog')

                ->withData(['title'=>'Test', 'body'=>'sdsd', 'userId'=>1])

                ->post();

    dd($response);

    }
}
