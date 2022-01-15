<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penulis;

class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penulis = penulis::orderby('created_at', 'desc')->get();
        return view('admin.perpus.index', compact('penulis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.perpus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'penulis' => 'required',
            'judul' => 'required',
            'diskripsi' => 'required',
            'foto' => 'required'

        ]);

        $foto = $request->foto;
        $new_foto = time().$foto->getClientOriginalName();

        $penulis = penulis::create([

            'penulis' => $request->penulis,
            'judul' =>  $request->judul,
            'diskripsi' =>  $request->diskripsi,
            'foto' => 'storage/uploads/posts/'.$new_foto,

        ]);


        $foto->move('storage/uploads/posts/', $new_foto);
        return redirect()->back()->with('success','Postingan anda berhasil disimpan'); 
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

        $penulis = penulis::findorfail($id);
        return view('admin.perpus.edit', compact('penulis'));
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
        $this->validate($request, [
            'penulis' => 'required',
            'judul' => 'required',
            'diskripsi' => 'required'            
         ]);

        $penulis = penulis::findorfail($id);
        if ($request->has('foto')) {
            $foto = $request->foto;
            $new_foto = time().$foto->getClientOriginalName();
            $foto->move('storage/uploads/posts/', $new_foto);

        $data = [
            'penulis' => $request->penulis,
            'judul' =>  $request->judul,
            'diskripsi' =>  $request->diskripsi,
            'foto' => 'storage/uploads/posts/'.$new_foto,
        ];

        }
        else{
        $data = [
            'penulis' => $request->penulis,
            'judul' =>  $request->judul,
            'diskripsi' =>  $request->diskripsi,
        ];

        }
        $penulis->update($data);

        return redirect()->back()->with('success','Postingan anda berhasil diupdate'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penulis = penulis::findorfail($id);
        $penulis->delete();

        return redirect()->back()->with('success','Post Berhasil Dihapus (Silahkan cek trashed post)');
    }
}
