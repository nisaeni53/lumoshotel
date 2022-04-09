<?php

namespace App\Http\Controllers;

use App\Models\FasilitasKamar;
use App\Models\Kamar;
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
        $data['kamar'] = Kamar::all();
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
        $data['kamar'] = Kamar::all();
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
            'id_kamar => required',
            'nama_fasilitas => required',

        ];
        $customMessages = [
            'id_kamar.required' => 'Field Id Kamar Wajib Diisi!',
            'nama_fasilitas.required' => 'Field Nama Fasilitas Wajib Diisi',
        ];

        $this->validate($request, $rule, $customMessages);
        
        $input = $request->all();

        $status = FasilitasKamar::create($input);
        if ($status){
            return redirect('/admin/fasilitaskamar/'.$request->id_kamar.'/edit')->with('success', 'Data berhasil diubah');
        }else{
            return redirect('/admin/fasilitaskamar/'.$request->id_kamar.'/edit')->with('error', 'Data gagal diubah');
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
        $data['kamar'] = Kamar::all();
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
        'id_kamar => required',
        'nama_fasilitas => required',

        ];
        $customMessages = [
            'id_kamar.required' => 'Field Id Kamar Wajib Diisi!',
            'nama_fasilitas.required' => 'Field Nama Fasilitas Wajib Diisi',
        ];

        $this->validate($request, $rule, $customMessages);
        $input = $request->all();

        $fasilitaskamar = fasilitaskamar::find($id);
        $fasilitaskamar->id_kamar= $request->id_kamar;
        $fasilitaskamar->nama_fasilitas = $request->nama_fasilitas;


        $status = $fasilitaskamar->save();
        if ($status){
            return redirect('/admin/fasilitaskamar/'.$request->id_kamar.'/')->with('success', 'Data berhasil diubah');
        }else{
            return redirect('/admin/fasilitaskamar/'.$request->id_kamar.'/edit')->with('error', 'Data gagal diubah');
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

    public function createWithKamar($id){
        // $data['id_kamar'] = $id;
        $data['kamar'] = Kamar::all();
        // dd($data);
        return view ('admin.fasilitaskamar.form', $data);
    }

    public function storeWithKamar(Request $request, $id){
        $rule = [
            'id_kamar => required',
            'nama_fasilitas => required',
    
            ];
            $customMessages = [
                'id_kamar.required' => 'Field Id Kamar Wajib Diisi!',
                'nama_fasilitas.required' => 'Field Nama Fasilitas Wajib Diisi',
            ];

        $this->validate($request, $rule, $customMessages);
        $input = $request->all();
       
        $status = FasilitasKamar::create($input);
        if ($status){
            return redirect('/admin/kamar/'.$request->id_kamar.'/edit')->with('success', 'Data berhasil ditambahkan');
        }else{
            return redirect('admin/fasilitaskamar/create')->with('error', 'Data gagal Ditambahkan');
        }
    }
}
