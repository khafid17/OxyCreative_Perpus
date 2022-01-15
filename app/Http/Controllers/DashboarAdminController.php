<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\ProdukHukum;
use App\Models\BukuTamu;
use App\Models\User;

class DashboarAdminController extends Controller
{
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
        $chart1 = Posts::all();

        return view('admin.dashboard', compact('widget', 'chart1'));

    }
}
