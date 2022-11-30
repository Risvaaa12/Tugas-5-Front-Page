<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packages;

class HomeController extends Controller
{
    public function index(){
        $title="Landing Page";
        // $packages=[(object)[
        //     'package_name'=>'Dummy Name',
        //     'package_desc'=>'Dummy Desc'
        // ],(object)[
        //     'package_name'=>'Dummy Name2',
        //     'package_desc'=>'Dummy Desc2'
        // ]];
        $packages=Packages::all();
        //dd($packages);
        return view('frontpage.landingpage', compact('title','packages'));
    }

    function first(){
        return view('frontpage.firstpage', ['title' => "first page"]);
    }

    // function book(){
    //     return view('booking.bookingpage', ['title' => "booking page"]);
    // }
    
}
