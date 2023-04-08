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
        return redirect()->route('admin.gejala.gejala')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
