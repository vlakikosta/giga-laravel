<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Laptop;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', [
            'laptops' => DB::table('laptops')->paginate(20)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($site_id)
    {
        $data = DB::table('laptops')->where('site_id', $site_id)->first();
        //var_dump($data);
        if (is_null($data))
            return redirect('/');

        return view('show')->with('data1',$data);
    }
}
