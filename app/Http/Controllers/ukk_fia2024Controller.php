<?php

namespace App\Http\Controllers;

use App\Models\ukk_fia2024model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PharIo\Manifest\Library;

class ukk_fia2024Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ukk_fia2024model::orderBy('bukuid','asc')->paginate(5);
        return view('ukk_fia2024/index')->with('data',$data);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ukk_fia2024/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('bukuId', $request->bukuId);
        Session::flash('judul', $request->judul);
        Session::flash('penulis', $request->penulis);
        Session::flash('penerbit', $request->penerbit);
        Session::flash('tahunterbit', $request->tahunterbit);

        $request->validate([
            'bukuId'=>'required|numeric',
            'judul'=>'required',
            'penulis'=>'required',
            'penerbit'=>'required',
            'tahunterbit'=>'required|numeric'
        ],[
            'bukuId.required'=>'Buku Id wajib diisi',
            'bukuId.numeric'=>'Buku Id wajib diisi dengan angka',
            'judul.required'=>'Judul wajib diisi',
            'penulis.required'=>'Penulis wajib diisi',
            'penerbit.required'=>'Penerbit wajib diisi',
            'tahunterbit.required'=>'Tahun Terbit wajib diisi',
            'tahunterbit.numeric'=>'Tahun Terbit wajib diisi dengan angka'
        ]);
        $data = [  
            'bukuId'=>$request->input('bukuId'),
            'judul'=>$request->input('judul'),
            'penulis'=>$request->input('penulis'),
            'penerbit'=>$request->input('penerbit'),
            'tahunterbit'=>$request->input('tahunterbit')
        ];
        ukk_fia2024model::create($data);
        return redirect('ukk_fia2024')->with('success','Berhasil Menambahkan Data');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = ukk_fia2024model::where('bukuid', $id)->first();
        return view('ukk_fia2024/show')->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=ukk_fia2024model::where('bukuid',$id)->first();
        return view('ukk_fia2024/edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
        $request->validate([
            'judul'=>'required',
            'penulis'=>'required',
            'penerbit'=>'required',
            'tahunterbit'=>'required|numeric'
        ],[
            'judul.required'=>'Judul wajib diisi',
            'penulis.required'=>'Penulis wajib diisi',
            'penerbit.required'=>'Penerbit wajib diisi',
            'tahunterbit.required'=>'Tahun Terbit wajib diisi',
            'tahunterbit.numeric'=>'Tahun Terbit wajib diisi dengan angka'
        ]);
        $data=[
            'judul'=>$request->input('judul'),
            'penulis'=>$request->input('penulis'),
            'penerbit'=>$request->input('penerbit'),
            'tahunterbit'=>$request->input('tahunterbit')
        ];
        ukk_fia2024model::where('bukuId',$id)->update($data);
        return redirect('/ukk_fia2024')->with('success','Berhasil melakukan update data');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ukk_fia2024model::where('bukuId',$id)->delete();
        return redirect('/ukk_fia2024')->with('success','Berhasil Hapus Data');
    }

    function cetakdata(){
        $data=ukk_fia2024model::all();
        return view('ukk_fia2024.cetakdata',compact('data'));
    }

}