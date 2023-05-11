<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;

class GejalaController extends Controller
{
    public function index()
    {
        //get gejala
        $gejalas = Gejala::latest()->paginate(5);

        //render view with posts
        return view('admin.gejala.gejala', compact('gejalas'));
    }

    public function create()
    {
        return view('admin.gejala.create');
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nama_gejala'     => 'required',
            'kd_gejala'   => 'required'
        ]);

        //create gejala
        Gejala::create([
            'nama_gejala'     => $request->nama_gejala,
            'kd_gejala'     => $request->kd_gejala,
        ]);

        //redirect to gejala
        return redirect()->route('')->with(['success' => 'Data Berhasil Disimpan!']);
        // return redirect()->back();
    }

    // ===================== Edit =====================
    public function edit(Gejala $gejala)
    {
        return view('admin.gejala.edit', compact('gejala'));
    }

    //================== Update =========================
    public function update(Request $request, Gejala $gejala)
    {
        //validate form
        $this->validate($request, [
            'nama_gejala'     => 'required',
            'kd_gejala'   => 'required'
        ]);

         //update post without image
         $gejala->update([
            'nama_gejala'     => $request->nama_gejala,
            'kd_gejala'   => $request->kd_gejala
        ]);

        //redirect to index
        return redirect()->route('admin.gejala.gejala')->with(['success' => 'Data Berhasil Diubah!']);
    }

    //========== Hapus ============
    public function destroy(Gejala $gejala)
    {
        //delete gejala
        $gejala->delete();

        //redirect to index
        // return redirect()->route('admin.gejala.gejala')->with(['success' => 'Data Berhasil Dihapus!']);
        return back();
    }

}
