<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('front.index');
    }
    public function about(){
        return view('front.pages.about');
    }
    public function findJob(){
        return view('front.pages.jobs');
    }
    public function jobDetail(){
        return view('front.pages.jobDetails');
    }
    public function service(){
        return view('front.pages.services');
    }
    public function partner(){
        return view('front.pages.partners');
    }
    public function contact(){
        return view('front.pages.contact');
    }
}
