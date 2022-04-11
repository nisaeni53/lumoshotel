<?php

namespace App\Http\Controllers;

use App\Models\FasilitasHotel;
use Illuminate\Support\Str;
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
            'foto' => 'required|mimes:jpg,jpeg,tmp,png',
            'keterangan' => 'required',
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
        $status = FasilitasHotel::create($input);
        if ($status){
            return redirect('admin/fasilitashotel')->with('success', 'Data berhasil ditambahkan');
        }else{
            return redirect('admin/fasilitashotel/create')->with('error', 'Data gagal ditambahkan');
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
            'nama_fasilitas' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,tmp,png',
            'keterangan' => 'required',
        ];
        $customMessages = [
            'nama_fasilitas.required' => 'Field Nama Fasilitas Wajib Diisi!',
            'foto.required' => 'Field foto Wajib Diisi!',
            'keterangan.required' => 'Field Keterangan Wajib Diisi!',
        ];

        $this->validate($request, $rule, $customMessages);
        $input = $request->all();
        $fasilitashotel = FasilitasHotel::find($id);
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $foto_ext = $foto->getClientOriginalExtension();
            $foto_name = Str::random(8);

            $upload_path = 'assets/admin';
            $imagename = $upload_path.'/'.$foto_name.'.'.$foto_ext;
            $request->file('foto')->move($upload_path,$imagename);

            $input['foto'] = $imagename;
        }
        $status = $fasilitashotel->update($input);
        if ($status) {
            return redirect('admin/fasilitashotel')->with('success','Data berhasil diubah');
        }else{
            return redirect('admin/fasilitashotel/form')->with('error', 'Data gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FasilitasHotel $fasilitashotel)
    {
        //
        $fasilitashotel->delete();
        return redirect('admin/fasilitashotel')->with('succes','Siswa Berhasil di Hapus');
    }
}
