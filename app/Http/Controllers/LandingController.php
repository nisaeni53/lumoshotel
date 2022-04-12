<?php

namespace App\Http\Controllers;

use App\Models\FasilitasHotel;
use App\Models\FasilitasKamar;
use App\Models\Kamar;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitask = Kamar::get();
        $data['kamar'] = Kamar::all();
        $data['fasilitaskamar'] = FasilitasKamar::all();
        $data['fasilitashotel'] = FasilitasHotel::all();
        // dd($kamar);
        return view('user.landing', $data, ['fasilitask' => $fasilitask]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['kamar'] = Kamar::all();
        return view('user.formchekin', $data);
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
            'id_kamar => required',
            'nama_pemesan => required',
            'nomor_telepon => required',
            'check_in => required',
            'check_out => required',
            'jumlah_kamar => required',

        ];
        $customMessages = [
            'id_kamar.required' => 'Field Nama Fasilitas Wajib Diisi',
            'nama_pemesan.required' => 'Field Nama Fasilitas Wajib Diisi',
            'nomor_telepon.required' => 'Field Nama Fasilitas Wajib Diisi',
            'check_in.required' => 'Field Nama Fasilitas Wajib Diisi',
            'check_out.required' => 'Field Nama Fasilitas Wajib Diisi',
            'jumlah_kamar.required'  => 'Field Nama Fasilitas Wajib Diisi',
        ];

        $this->validate($request, $rule, $customMessages);
        $input = $request->all();

        $status = Pemesanan::create($input);
        if ($status){
            return redirect('/user/cetak')->with('success', 'Data berhasil diubah');
        }else{
            return redirect('/user/formcheckin')->with('error', 'Data gagal diubah');
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
        $fasilitaskamar = FasilitasKamar::find($id);
        $data['fasilitaskamar'] = FasilitasKamar::all();
        $data['kamar'] = Kamar::all();
        $data['fasilitaskamar'] = $fasilitaskamar;
        return view('user.landing', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Pemesanan $pemesanan)
    {
        //
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
    }

    public function landing($id){
        $fasilitask = Kamar::where('id', $id)->get();
        $data['kamar'] = Kamar::all();
        $data['fasilitaskamar'] = FasilitasKamar::all();
        $data['fasilitashotel'] = FasilitasHotel::all();
        dd($fasilitask);
        return view('user.landing', $data, ['fasilitask' => $fasilitask]);
    }
}
