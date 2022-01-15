<?php

namespace App\Http\Controllers;

use App\Models\JenisPeraturan;
use App\Models\KategoriHukum;
use App\Models\opd;
use App\Models\bukutamu;
use App\Models\penulis;
use App\Models\ProdukHukum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Spatie\QueryBuilder\QueryBuilder;

class BerandaController extends Controller
{
    public function index(Request $request){

            $jenis_peraturan_id = $request->jenis_peraturan_id;
            $judul = $request->judul;
            $nomor = $request->nomor;
            $tahun = $request->tahun;

            $hukum = ProdukHukum::query();
            if (!empty($jenis_peraturan_id)) {
                $hukum = $hukum->where('jenis_peraturan_id', 'like', '%'.$jenis_peraturan_id.'%');
            }

            if (!empty($judul)) {
                $hukum = $hukum->where('judul', $judul);
            }

            if (!empty($nomor)) {
                $hukum = $hukum->where('nomor', $nomor);
            }

            if (!empty($tahun)) {
                $hukum = $hukum->where('tahun', 'like', '%'.$tahun.'%');
            }

            $hukum = $hukum->get();
            $jenis = JenisPeraturan::all();

            $penulis = Penulis::all();
            // return view('dashboard.beranda', compact('penulis'));
            return view('dashboard.beranda', compact('hukum', 'jenis', 'penulis'));

    }

    public function search(Request $request){
        $jenis_peraturan_id = $request->jenis_peraturan_id;
        $judul = $request->judul;
        $nomor = $request->nomor;
        $tahun = $request->tahun;

        $hukum = ProdukHukum::query();
        if (!empty($jenis_peraturan_id)) {
            $hukum = $hukum->where('jenis_peraturan_id', 'like', '%'.$jenis_peraturan_id.'%');
        }

        if (!empty($judul)) {
            $hukum = $hukum->where('judul', $judul);
        }

        if (!empty($nomor)) {
            $hukum = $hukum->where('nomor', $nomor);
        }

        if (!empty($tahun)) {
            $hukum = $hukum->where('tahun', 'like', '%'.$tahun.'%');
        }

        $hukum = $hukum->get();
        $jenis = JenisPeraturan::all();

        // $se = Produkhukum::where()count();
        $se = DB::table('produk_hukums')->where('jenis_peraturan_id','=',1 )->count();
        $pd = DB::table('produk_hukums')->where('jenis_peraturan_id','=',4 )->count();

        $ib = Produkhukum::count();
        $pb = Produkhukum::count();
        $pd = Produkhukum::count();

        $widget = [
            'jenis_peraturan_id' => $se,
            'produkhukum' => $ib,
            'produkhukum' => $pb,
            'produkhukum' => $pd,


            //...
        ];

        return view('dashboard.search', compact('hukum', 'jenis', 'widget'));

    }
    public function bukutamu(){
        $bukutamu = DB::table('buku_tamus')->where('status','=',1 )->get();
        return view('dashboard.bukutamu', \compact('bukutamu'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'nomor' => 'required',
            'alamat' => 'required',
            'saran' => 'required',
        ]);


        $buku = BukuTamu::create([
            'nama' => $request->nama,
            'nomor' => $request->nomor,
            'alamat' => $request->alamat,
            'saran' => $request->saran,
        ]);

        return redirect()->back()->with('success','Data anda telah berhasil dikirim');
    }

    public function awal(){
        return view('dashboard.awal');
    }

    public function beranda(){
        $penulis = Penulis::all();
        return view('dashboard.beranda', compact('penulis'));
    }
}
