<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stadium;

class StadiumController extends Controller
{
    public function index()
    {
        //get stadiums
        $stadium = Stadium::latest()->paginate(5);

        //render view with stadiums
        return view('admin.stadium.stadium', compact('stadium'));
    }

    public function create()
    {
        return view('admin.stadium.create');
    }
    
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            // 'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'title'     => 'required|min:5',
            // 'content'   => 'required|min:10'
        
        ]);

        
        //create stadium
        Stadium::create([
            'nama_stadium'     => $request->nama_stadium,
            'kd_stadium'   => $request->kd_stadium,
            'solusi'   => $request->solusi,
        ]);

        //redirect to index
        return redirect()->route('admin.stadium.stadium')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}




    
