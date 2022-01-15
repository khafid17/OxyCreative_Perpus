<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\penulis;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
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
            'name' => 'required|min:3|max:100',
            'email' => 'required|email',
            'level' => 'required',
        ]);

        if($request->input('password')) {
            $password = bcrypt($request->password);
        }
        else
        {
            $password = bcrypt('1234');
        }

        User::create([
                'name' => $request->name,
                'email' => $request->email,
                'level' => $request->level,
                'password' => $password
        ]);

        return redirect()->back()->with('success','User Berhasil Disimpan');
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
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
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
            'name' => 'required|min:3|max:100',
            'level' => 'required',
          ]);

         if($request->input('password')) {
            $user_data = [
                'name' => $request->name,
                'level' => $request->level,
                'password' => bcrypt($request->password)
                ];
         }
         else{
            $user_data = [
                'name' => $request->name,
                'level' => $request->level,
                ];
         }

         $user = User::find($id);
         $user->update($user_data);

         return redirect()->route('user.index')->with('success','berhasil diupdate');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findorfail($id);
        $user->delete();

        return redirect()->back()->with('success','Berhasil Cuy dihapus');
    }

    public function perpususer()
    {
        $penulis = penulis::get();
        return view('admin.perpus.produk', compact('penulis'));
    }
}


