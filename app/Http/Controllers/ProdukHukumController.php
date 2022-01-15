<?php

namespace App\Http\Controllers;

use App\Models\JenisPeraturan;
use App\Models\KategoriHukum;
use App\Models\opd;
use App\Models\ProdukHukum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProdukHukumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hukum = ProdukHukum::where('draft', '=', '0')->get();
        return view('admin.hukum.index', compact('hukum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opd = opd::all();
        $jenis = JenisPeraturan::all();
        $kategori = KategoriHukum::all();

        return view('admin.hukum.create', compact('opd', 'jenis', 'kategori'));
    }
    public function produk()
    {
        $produk = ProdukHukum::where('draft', '=', '1')->get();
        return view('admin.hukum.produk', compact('produk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        // $request->validate([
        //     'judul' => 'required',
        //         'nomor' => 'required',
        //         'tahun' => 'required',
        //         'status' => 'required',
        //         'sumber' => 'required',
        //         'abstrak' => 'required',
        //         'tanggal_penetapan' => 'required',
        //         'tanggal_diundangkan' => 'required',
        //         'opd_id' => 'required',
        //         'jenis_peraturan_id' => 'required',
        //         'kategori_hukum_id' => 'required',
        //         'file' => 'required|max:2048'
        // ]);
        // $imgName = null;
        // if($request->thumbnail){
        
        // $imgName = $request->thumbnail->getClientOriginalName() . '-' . time() 
        //                             . '.' . $request->thumbnail->extension();
        // $request->thumbnail->move(public_path('storage/jdih'), $imgName);
        // }
        // ProdukHukum::create([
        //     'judul' => $request->judul,
        //     'nomor' =>  $request->nomor,
        //     'tahun' =>  $request->tahun,
        //     'status' =>  $request->status,
        //     'sumber' =>  $request->sumber,
        //     'abstrak' =>  $request->abstrak,
        //     'tanggal_penetapan' =>  $request->tanggal_penetapan,
        //     'tanggal_diundangkan' =>  $request->tanggal_diundangkan,
        //     'opd_id' =>  $request->opd_id,
        //     'jenis_peraturan_id' =>  $request->jenis_peraturan_id,
        //     'kategori_hukum_id' =>  $request->kategori_hukum_id,

        //     'file' => $imgName,
        // ]);

        // return redirect('/hukum');


        // $this->validate($request, [
        //     'judul' => 'required',
        //     'nomor' => 'required',
        //     'tahun' => 'required',
        //     'status' => 'required',
        //     'sumber' => 'required',
        //     'abstrak' => 'required',
        //     'tanggal_penetapan' => 'required',
        //     'tanggal_diundangkan' => 'required',
        //     'opd_id' => 'required',
        //     'jenis_peraturan_id' => 'required',
        //     'kategori_hukum_id' => 'required',
        //     'file' => 'required|max:2048'
        // ]);
        
        // $file = $request->file;
        // $new_file = time().$file->getClientOriginalName();
        // $produkhukum = ProdukHukum::create([
        //     'judul' => $request->judul,
        //     'nomor' =>  $request->nomor,
        //     'tahun' =>  $request->tahun,
        //     'status' =>  $request->status,
        //     'sumber' =>  $request->sumber,
        //     'abstrak' =>  $request->abstrak,
        //     'tanggal_penetapan' =>  $request->tanggal_penetapan,
        //     'tanggal_diundangkan' =>  $request->tanggal_diundangkan,
        //     'opd_id' =>  $request->opd_id,
        //     'jenis_peraturan_id' =>  $request->jenis_peraturan_id,
        //     'kategori_hukum_id' =>  $request->kategori_hukum_id,

        //     'file' => 'storage/jdih/'.$new_file,

        //     // 'judul' => $request->judul,
        //     // 'category_id' =>  $request->category_id,
        //     // 'content' =>  $request->content,
        //     // 'gambar' => 'storage/uploads/posts/'.$new_gambar,
        //     // 'slug' => Str::slug($request->judul),
        //     // 'users_id' => Auth::id()
        // ]);

        // $produkhukum->kategorihukum()->attach($request->kategorihukum);
        // $file->move('storage/jdih/', $new_file);

        // return redirect()->back()->with('success','Postingan anda berhasil disimpan'); 

// data 1

        // $request->validate([
        //     'judul' => 'required',
        //     'nomor' => 'required',
        //     'tahun' => 'required',
        //     'status' => 'required',
        //     'sumber' => 'required',
        //     'abstrak' => 'required',
        //     'tanggal_penetapan' => 'required',
        //     'tanggal_diundangkan' => 'required',
        //     'opd_id' => 'required',
        //     'jenis_peraturan_id' => 'required',
        //     'kategori_hukum_id' => 'required',
        //     'file' => 'required|max:2048'
        // ]);

        // $file = $request->file('file');

        // $new_name = rand() . '.' . $file->getClientOriginalExtension();
        // $file->move(public_path('storage/jdih'), $new_name);
        // $form_data = array(
        //     'judul' => $request->judul,
        //     'nomor' =>  $request->nomor,
        //     'tahun' =>  $request->tahun,
        //     'status' =>  $request->status,
        //     'sumber' =>  $request->sumber,
        //     'abstrak' =>  $request->abstrak,
        //     'tanggal_penetapan' =>  $request->tanggal_penetapan,
        //     'tanggal_diundangkan' =>  $request->tanggal_diundangkan,
        //     'opd_id' =>  $request->opd_id,
        //     'jenis_peraturan_id' =>  $request->jenis_peraturan_id,
        //     'kategori_hukum_id' =>  $request->kategori_hukum_id,

        //     'file' => $new_name
        // );
        // ProdukHukum::create($form_data);
        // return redirect('hukum')->with('success', 'Data Baehasil ditambah');

// data 2

        // $request->validate([
        //     'judul' => 'required',
        //     'nomor' => 'required',
        //     'tahun' => 'required',
        //     'status' => 'required',
        //     'sumber' => 'required',
        //     'abstrak' => 'required',
        //     'tanggal_penetapan' => 'required',
        //     'tanggal_diundangkan' => 'required',
        //     'opd_id' => 'required',
        //     'jenis_peraturan_id' => 'required',
        //     'kategori_hukum_id' => 'required',
        //     'file' => 'required'
        // ]);

        // $data = new ProdukHukum();
        // if($request->file('file')){
        //     $file=$request->file('file');
        //     $filename =time(). '.' .$file->getClientOriginalExtension();
        //     $request->file->move('storage/jdih/', $filename);

        //     $data->file = $filename;
        // }
        // $data->judul = $request->judul;
        // $data->nomor= $request->nomor;
        // $data->tahun= $request->tahun;
        // $data->status= $request->status;
        // $data->sumber= $request->sumber;
        // $data->abstrak= $request->abstrak;
        // $data->tanggal_penetapan= $request->tanggal_penetapan;
        // $data->tanggal_diundangkan= $request->tanggal_diundangkan;
        // $data->opd_id= $request->opd_id;
        // $data->jenis_peraturan_id= $request->jenis_peraturan_id;
        // $data->kategori_hukum_id= $request->kategori_hukum_id;


        // $data->save();
        // return redirect()->back()->with('success','Postingan anda berhasil disimpan'); 



// data 3

        $request->validate([
            'judul' => 'required',
            'nomor' => 'required',
            'tahun' => 'required',
            'status' => 'required',
            'sumber' => 'required',
            'abstrak' => 'required',
            'tanggal_penetapan' => 'required',
            'tanggal_diundangkan' => 'required',
            'opd_id' => 'required',
            'jenis_peraturan_id' => 'required',
            'kategori_hukum_id' => 'required',
            'file' => 'required|max:2048'
        ]);

        $file = $request->file('file');

        $new_name = rand() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('storage/jdih') , $new_name);
        // Storage::put('file.jpg', $contents);
        $form_data = array(
            'judul' => $request->judul,
            'nomor' =>  $request->nomor,
            'tahun' =>  $request->tahun,
            'status' =>  $request->status,
            'sumber' =>  $request->sumber,
            'abstrak' =>  $request->abstrak,
            'tanggal_penetapan' =>  $request->tanggal_penetapan,
            'tanggal_diundangkan' =>  $request->tanggal_diundangkan,
            'opd_id' =>  $request->opd_id,
            'jenis_peraturan_id' =>  $request->jenis_peraturan_id,
            'kategori_hukum_id' =>  $request->kategori_hukum_id,
            'file' => $new_name
        );
        ProdukHukum::create($form_data);
        return redirect('hukum')->with('success', 'Produk Hukum Barhasil ditambah');


// data 4

        // $request->validate([
        //     'judul' => 'required',
        //     'nomor' => 'required',
        //     'tahun' => 'required',
        //     'status' => 'required',
        //     'sumber' => 'required',
        //     'abstrak' => 'required',
        //     'tanggal_penetapan' => 'required',
        //     'tanggal_diundangkan' => 'required',
        //     'opd_id' => 'required',
        //     'jenis_peraturan_id' => 'required',
        //     'kategori_hukum_id' => 'required',
        //     'file' => 'required|max:2048'

        // ]);
        // $imgName = null;
        // if($request->thumbnail){

        // $imgName = $request->thumbnail->getClientOriginalName() . '-' . time() 
        //                             . '.' . $request->thumbnail->extension();
        // $request->thumbnail->move(public_path('file'), $imgName);
        // }
        // ProdukHukum::create([
        //     'judul' => $request->judul,
        //     'nomor' =>  $request->nomor,
        //     'tahun' =>  $request->tahun,
        //     'status' =>  $request->status,
        //     'sumber' =>  $request->sumber,
        //     'abstrak' =>  $request->abstrak,
        //     'tanggal_penetapan' =>  $request->tanggal_penetapan,
        //     'tanggal_diundangkan' =>  $request->tanggal_diundangkan,
        //     'opd_id' =>  $request->opd_id,
        //     'jenis_peraturan_id' =>  $request->jenis_peraturan_id,
        //     'kategori_hukum_id' =>  $request->kategori_hukum_id,
        //     'file' => $imgName
        // ]);
        // return redirect('hukum')->with('success', 'Data Baehasil ditambah');
        

        // $request->validate([
        //     'judul' => 'required',
        //     'nomor' => 'required',
        //     'tahun' => 'required',
        //     'status' => 'required',
        //     'sumber' => 'required',
        //     'abstrak' => 'required',
        //     'tanggal_penetapan' => 'required',
        //     'tanggal_diundangkan' => 'required',
        //     'opd_id' => 'required',
        //     'jenis_peraturan_id' => 'required',
        //     'kategori_hukum_id' => 'required',
        //     'file' => 'required|max:2048'
        // ]);
  
        // $input = $request->all();
  
        // if ($file = $request->file('file')) {
        //     $destinationPath = 'file/';
        //     $profileImage = date('YmdHis') . "." . $file->getClientOriginalExtension();
        //     $file->move($destinationPath, $profileImage);
        //     $input['file'] = "$profileImage";
        // }
    
        // ProdukHukum::create($input);
     
        // return redirect()->route('hukum.index')
        //                 ->with('success','Product created successfully.');

        // $file = $request->file('file');

        // $new_name = rand() . '.' . $file->getClientOriginalExtension();
        // $file->move(public_path('storage/jdih'), $new_name);
        // $form_data = array(
        //     'judul' => $request->judul,
        //     'nomor' =>  $request->nomor,
        //     'tahun' =>  $request->tahun,
        //     'status' =>  $request->status,
        //     'sumber' =>  $request->sumber,
        //     'abstrak' =>  $request->abstrak,
        //     'tanggal_penetapan' =>  $request->tanggal_penetapan,
        //     'tanggal_diundangkan' =>  $request->tanggal_diundangkan,
        //     'opd_id' =>  $request->opd_id,
        //     'jenis_peraturan_id' =>  $request->jenis_peraturan_id,
        //     'kategori_hukum_id' =>  $request->kategori_hukum_id,
        //     // 'file' => 'storage/uploads/posts/'.$new_file,
        //     'file' => $new_name
        // );
        // ProdukHukum::create($form_data);
        // return redirect()->with('success', 'Data Baehasil ditambah');

        // $this->validate($request, [

        //     'judul' => 'required',
        //     'nomor' => 'required',
        //     'tahun' => 'required',
        //     'status' => 'required',
        //     'sumber' => 'required',
        //     'abstrak' => 'required',
        //     'tanggal_penetapan' => 'required',
        //     'tanggal_diundangkan' => 'required',
        //     // 'opd_id' => 'required',
        //     // 'jenis_peraturan_id' => 'required',
        //     // 'kategori_hukum_id' => 'required',
        //     'file' => 'required'
        // ]);

        // $file = $request->file;
        // $new_file = time().$file->getClientOriginalName();

        // $data = array(

        //     'judul' => $request->judul,
        //     'nomor' =>  $request->nomor,
        //     'tahun' =>  $request->tahun,
        //     'status' =>  $request->status,
        //     'sumber' =>  $request->sumber,
        //     'abstrak' =>  $request->abstrak,
        //     'tanggal_penetapan' =>  $request->tanggal_penetapan,
        //     'tanggal_diundangkan' =>  $request->tanggal_diundangkan,
        //     'opd_id' =>  $request->opd_id,
        //     'jenis_peraturan_id' =>  $request->jenis_peraturan_id,
        //     'kategori_hukum_id' =>  $request->kategori_hukum_id,
        //     'file' => 'storage/uploads/posts/'.$new_file,
        // );

        // // $hukum->kategori_hukums()->attach($request->kategori_hukums);
        // ProdukHukum::create($data);

        // $file->move('storage/uploads/jdih/', $new_file);
        // return redirect()->back()->with('success','Postingan anda berhasil disimpan'); 
    


// data 6

        // $request->validate([
        //     'judul' => 'required',
        //     'nomor' => 'required',
        //     'tahun' => 'required',
        //     'status' => 'required',
        //     'sumber' => 'required',
        //     'abstrak' => 'required',
        //     'tanggal_penetapan' => 'required',
        //     'tanggal_diundangkan' => 'required',
        //     'opd_id' => 'required',
        //     'jenis_peraturan_id' => 'required',
        //     'kategori_hukum_id' => 'required',
        //     'file' => 'required'
        // ]);
        // $file = $request->file('file');
        // $name = time();
        // $extension = $file->getClientOriginalExtension();
        // $newName = $name . '.' . $extension;
        // $path = Storage::putFileAs('public/images', $request->file('file'), $newName);
        // // $path = $request->file('file')->store('public/images');
        // $post = new ProdukHukum();
        // $post->judul = $request->judul;
        // $post->nomor = $request->nomor;
        // $post->tahun = $request->tahun;
        // $post->status = $request->status;
        // $post->sumber = $request->sumber;
        // $post->abstrak = $request->abstrak;
        // $post->tanggal_penetapan = $request->tanggal_penetapan;
        // $post->tanggal_diundangkan = $request->tanggal_diundangkan;
        // $post->opd_id = $request->opd_id;
        // $post->jenis_peraturan_id = $request->jenis_peraturan_id;
        // $post->kategori_hukum_id = $request->kategori_hukum_id;
        // // $post->jenis_peraturan_id = $request->jenis_peraturan_id;
        // $post->file = $path;
        // $post->save();
     
        // return redirect()->route('hukum.index')
        //                 ->with('success','Post has been created successfully.');
        

// data 7
        // $request->validate([
        //     'judul' => 'required',
        //     'nomor' => 'required',
        //     'tahun' => 'required',
        //     'status' => 'required',
        //     'sumber' => 'required',
        //     'abstrak' => 'required',
        //     'tanggal_penetapan' => 'required',
        //     'tanggal_diundangkan' => 'required',
        //     'opd_id' => 'required',
        //     'jenis_peraturan_id' => 'required',
        //     'kategori_hukum_id' => 'required',
        //     'file' => 'required'
        // ]);

        // $store_image = null;
        // if (request()->File('file')) 
        // {
        //     $file = request()->File('file');
        //     $store_image = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
        //     $file->move(public_path('file'), $store_image);
        // } 

        // $form_data = array(
        //     'judul' => $request->judul,
        //         'nomor' =>  $request->nomor,
        //         'tahun' =>  $request->tahun,
        //         'status' =>  $request->status,
        //         'sumber' =>  $request->sumber,
        //         'abstrak' =>  $request->abstrak,
        //         'tanggal_penetapan' =>  $request->tanggal_penetapan,
        //         'tanggal_diundangkan' =>  $request->tanggal_diundangkan,
        //         'opd_id' =>  $request->opd_id,
        //         'jenis_peraturan_id' =>  $request->jenis_peraturan_id,
        //         'kategori_hukum_id' =>  $request->kategori_hukum_id,
        //         'file' => $store_image,
        // );

        // ProdukHukum::create($form_data);

        // return redirect('hukum')->with('success', 'Product Added successfully.');

        // }

        // public function edit($id){

        // $product= Product::findOrFail($id);
        // return view('products.edit')->with(compact('product'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $opd = opd::all();
        $jenis = JenisPeraturan::all();
        $kategori = KategoriHukum::all();
        $produkhukum = ProdukHukum::findorfail($id);


        return view('admin.hukum.edit', compact('opd', 'jenis', 'kategori', 'produkhukum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $file_name = $request->hidden_file;
        $file = $request->file('file');
        if($file != ''){
            $request->validate([
                'judul' => 'required',
                'nomor' => 'required',
                'tahun' => 'required',
                'status' => 'required',
                'sumber' => 'required',
                'abstrak' => 'required',
                'tanggal_penetapan' => 'required',
                'tanggal_diundangkan' => 'required',
                'opd_id' => 'required',
                'jenis_peraturan_id' => 'required',
                'kategori_hukum_id' => 'required',
                'file' => 'required|max:2048'
            ]);
            $file_name= rand() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage/jdih'), $file_name);
        }else{
            $request->validate([
                'judul' => 'required',
                'nomor' => 'required',
                'tahun' => 'required',
                'status' => 'required',
                'sumber' => 'required',
                'abstrak' => 'required',
                'tanggal_penetapan' => 'required',
                'tanggal_diundangkan' => 'required',
                'opd_id' => 'required',
                'jenis_peraturan_id' => 'required',
                'kategori_hukum_id' => 'required',
            ]);
        }
        $form_data = array(
            'judul' => $request->judul,
            'nomor' =>  $request->nomor,
            'tahun' =>  $request->tahun,
            'status' =>  $request->status,
            'sumber' =>  $request->sumber,
            'abstrak' =>  $request->abstrak,
            'tanggal_penetapan' =>  $request->tanggal_penetapan,
            'tanggal_diundangkan' =>  $request->tanggal_diundangkan,
            'opd_id' =>  $request->opd_id,
            'jenis_peraturan_id' =>  $request->jenis_peraturan_id,
            'kategori_hukum_id' =>  $request->kategori_hukum_id,
            'file' => $file_name
        );
        // dd($form_data);

        ProdukHukum::whereId($id)->update($form_data);
        return redirect('hukum')->with('success', 'Produk Hukum Berhasil diupdate');

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ProdukHukum::findOrFail($id);
        $data->delete();
        return redirect('hukum')->with('success', 'Data Berhasil dihapus');
    }

    public function draft($id){
        $data = DB::table('produk_hukums')->where('id',$id)->first();
        $status_sekarang = $data->draft;

        if($status_sekarang ==1){
            DB::table('produk_hukums')->where('id',$id)->update([
                'draft'=>0
            ]);
        }else{
            DB::table('produk_hukums')->where('id',$id)->update([
                'draft'=>1
            ]);
        }
        return redirect()->back()->with('success','Draft Berhasil diubah');

    }

}
