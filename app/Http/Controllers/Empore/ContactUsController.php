<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandingPageForm;

class ContactUsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        return view('landing-page/contact-us/contact-us');
    }

}
 
