<?php

namespace App\Http\Controllers;

use App\Models\FasilitasKamar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FasilitaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['fasilitaskamar'] = FasilitasKamar::all();
        return view('admin.fasilitaskamar.fasilitask', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['fasilitaskamar'] = FasilitasKamar::all();
        return view('admin.fasilitaskamar.form');
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
        // dd($request->all());
        $rule = [
            'nama_fasilitas' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,tmp,png',
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

        $status = FasilitasKamar::create($input);
        if ($status){
            return redirect('admin/fasilitaskamar')->with('success', 'Data berhasil ditambahkan');
        }else{
            return redirect('admin/fasilitaskamar/create')->with('error', 'Data gagal ditambahkan');
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
        $fasilitaskamar = FasilitasKamar::find($id);
        $data['fasilitaskamar'] = FasilitasKamar::all();
        $data['fasilitaskamar'] = $fasilitaskamar;
        return view('admin.fasilitaskamar.form', $data);
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
        $rule = [
            'nama_fasilitas' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,tmp,png',
        ];

        $this->validate($request, $rule);
        $input = $request->all();
        $fasilitaskamar = FasilitasKamar::find($id);
        $fasilitaskamar->nama_fasilitas = $request->nama_fasilitas;
        $fasilitaskamar->foto = $request->foto;


        $status = $fasilitaskamar->save();
        if ($status){
            return redirect('admin/fasilitaskamar')->with('success', 'Data berhasil diubah');
        }else{
            return redirect('admin/fasilitaskamar/form')->with('error', 'Data gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FasilitasKamar $fasilitaskamar)
    {
        $fasilitaskamar->delete();
        return redirect('admin/fasilitaskamar')->with('succes','Siswa Berhasil di Hapus');
    }
}
