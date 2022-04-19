<?php

namespace App\Http\Controllers;

use App\Models\FasilitasKamar;
use App\Models\Kamar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['kamar'] = Kamar::all();
        $data['fasilitaskamar'] = FasilitasKamar::all();
        return view('admin.kamar.kamar', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['kamar'] = Kamar::all();
        $data['fasilitaskamar'] = FasilitasKamar::all();
        return view('admin.kamar.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rule = [
            'tipe_kamar' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,tmp,png',
            'stok' => 'required',
            'harga' => 'required',
        ];

        $this->validate($request, $rule);
        
        $input = $request->all();
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $foto_ext = $foto->getClientOriginalExtension();
            $foto_name = Str::random(8);

        $upload_path = 'assets/admin';
        $imagename = $upload_path.'/'.$foto_name.'.'.$foto_ext;
        $request->file('foto')->move($upload_path,$imagename);

        $input['foto'] = $imagename;
        }

        $status = Kamar::create($input);
        if ($status){
            return redirect('admin/kamar')->with('success', 'Data berhasil ditambahkan');
        }else{
            return redirect('admin/kamar/create')->with('error', 'Data gagal ditambahkan');
        }
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
        //
        $data['fasilitaskamar'] = FasilitasKamar::all();
        $kamar = Kamar::find($id);
        $data['kamar'] = Kamar::all();
        $data['kamar'] = $kamar;
        return view('admin.kamar.form', $data);
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
        //
        $rule = [
            'tipe_kamar' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,tmp,png',
            'stok' => 'required',
            'harga' => 'required',
        ];

        $this->validate($request, $rule);
        $input = $request->all();
        $kamar = Kamar::find($id);
        $kamar->tipe_kamar = $request->tipe_kamar;
        $kamar->foto = $request->foto;
        $kamar->stok = $request->stok;
        $kamar->harga = $request->harga;
        if ($request->hasFile('foto')) {
            File::delete($kamar->foto);
            $foto = $request->file('foto');
            $foto_ext = $foto->getClientOriginalExtension();
            $foto_name = Str::random(8);

        $upload_path = 'assets/admin';
        $imagename = $upload_path.'/'.$foto_name.'.'.$foto_ext;
        $request->file('foto')->move($upload_path,$imagename);

        $kamar['foto'] = $imagename;
        }
        $status = $kamar->save();
        if ($status){
            return redirect('admin/kamar')->with('success', 'Data berhasil diubah');
        }else{
            return redirect('admin/kamar/form')->with('error', 'Data gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kamar $kamar)
    {
        $kamar->delete();
        return redirect('admin/kamar')->with('success','Data Kamar Berhasil di Hapus');
    }
}
