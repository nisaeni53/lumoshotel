<?php

namespace App\Http\Controllers;

use App\Models\FasilitasHotel;
use Illuminate\Http\Request;

class FasilitashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['fasilitashotel'] = FasilitasHotel::all();
        return view('admin.fasilitashotel.fasilitash', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.fasilitashotel.form');
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
            'nama_fasilitas' => 'required',
            'foto' => 'required',
            'keterangan' => 'required'
        ];

        $customMessages = [
            'nama_fasilitas.required' => 'Field Nama Fasilitas Wajib Diisi!',
            'foto.required' => 'Field Foto Wajib Diisi!',
            'keterangan.required' => 'Field Keterangan Wajib Diisi!',
        ];

        $this->validate($request, $rule, $customMessages);
        
        $input = $request->all();
        $status = FasilitasHotel::create($input);
        if ($status) {
            return redirect('admin/fasilitashotel')->with('success','Data berhasil ditambahkan');
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
        $fasilitashotel = FasilitasHotel::find($id);
        $data['fasilitashotel'] = $fasilitashotel;
        return view('admin.fasilitashotel.form', $data);
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
            'nama_fasilitas => required',
            'foto => required',
            'keterangan => required'
        ];
        $customMessages = [
            'nama_fasilitas.required' => 'Field Nama Fasilitas Wajib Diisi!',
            'foto.required' => 'Field foto Wajib Diisi!',
            'keterangan.required' => 'Field Keterangan Wajib Diisi!',
        ];

        $this->validate($request, $rule, $customMessages);
        
        $fasilitashotel = FasilitasHotel::find($id);
        $fasilitashotel->nama_fasilitas = $request->nama_fasilitas;
        $fasilitashotel->foto = $request->foto;
        $fasilitashotel->keterangan = $request->keterangan;

        $status = $fasilitashotel->save();
        if ($status) {
            return redirect('admin/fasilitashotel')->with('success','Data berhasil diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $fasilitashotel = FasilitasHotel::find($id);
        $status = $fasilitashotel->delete();
        if ($status){
            return 1;
        }else{
            return 0;
        }
    }
}
