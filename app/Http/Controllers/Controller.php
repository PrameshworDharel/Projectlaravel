<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request as FacadesRequest;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function home()
    {
        return view('home.index');
    }
    public function blog()
    {
        return view('home.blog');
    }
    public function services()
    {
        return view('home.services');
    }
    public function photos()
    {
        return view('home.photos');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function login()
    {
        return view('home.login');
    }
    public function signup()
    {
        return view('home.signup');
    }
    public function forgotpassword()
    {
        return view('home.forgotpassword');
    }
    public function dashboard()
    {
        return view('dashboard.main');
    }
    public function blogs()
    {
        return view('blogs.blog');
    }
    public function createblogs()
    {
        return view('blogs.createblogs');
    }
    public function editblogs()
    {
        return view('blogs.editblog');
    }
    public function deleteblogs()
    {
        return view('blogs.delete');
    }
    public function moreblogs()
    {
        return view('home.moreblogs');
    }
}
