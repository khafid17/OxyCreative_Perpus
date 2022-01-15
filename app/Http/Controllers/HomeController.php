<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\ProdukHukum;
use App\Models\BukuTamu;
use App\Models\User;


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
    // public function index()
    // {
    //     $role = Auth::user()->role;
    //     if($role == "admin"){
    //         return redirect()->to('admin');
    //     } else if($role == "user"){
    //         return redirect()->to('user');
    //     } else {
    //         return redirect()->to('logout');
    //     }
    // }
    public function index()
    {
        $user = User::count();
        $posts = Posts::count();;
        $ProdukHukum = ProdukHukum::count();
        $BukuTamu = BukuTamu::count();

        $widget = [
            'user' => $user,
            'posts' => $posts,
            'ProdukHukum' => $ProdukHukum,
            'BukuTamu' => $BukuTamu,
            
            //...
        ];

        return view('home');

    }
    public function error()
    {
        return view('error');
    }
    public function master(){
        return View ('layouts.master');
    }
        
}
