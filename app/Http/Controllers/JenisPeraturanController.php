<?php

namespace App\Http\Controllers;

use App\Models\JenisPeraturan;
use Illuminate\Http\Request;

class JenisPeraturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis = JenisPeraturan::orderby('created_at', 'desc')->get();
        return view('admin.JenisPeraturan.index', compact('jenis'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.JenisPeraturan.create');
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
            'nama' => 'required',
        ]);


        $jenis = JenisPeraturan::create([
            'nama' => $request->nama,
            'inisial' => $request->inisial,
            // 'slug' => Str::slug($request->name)
        ]);

        return redirect()->back()->with('success','Jenis Peraturan berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jenis = JenisPeraturan::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.JenisPeraturan.show', compact('jenis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenis = JenisPeraturan::findorfail($id);
        return view('admin.JenisPeraturan.edit', compact('jenis'));
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
            'nama' => 'required',
        ]);

        $jenis_data = [
            'nama' => $request->nama,
            'inisial' => $request->inisial,
            // 'slug' => Str::slug($request->name)
        ];

        JenisPeraturan::whereId($id)->update($jenis_data);

        return redirect()->route('jenis-peraturan.index')->with('success','Data Berhasil di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenis = JenisPeraturan::findorfail($id);
        $jenis->delete();

        return redirect()->back()->with('success','Data Berhasil Dihapus');
    }
}