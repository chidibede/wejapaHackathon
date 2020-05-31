<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('pages.index');
    }

    public function developer(){
        return view('pages.developer');
    }

    public function jobs(){
        return view('pages.jobs');
    }

    public function applications(){
        return view('pages.applications');
    }
}
