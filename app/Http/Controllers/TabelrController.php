<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class TabelrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // $keyword = $request->keyword;
        // $data = Pemesanan::Where('nama_pemesan', 'LIKE', '%'.$keyword.'%')->get();
        $data['pemesanan'] = Pemesanan::all();
        return view('resepsionis.tabelr', $data);
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $date = $request->get('date');
        $pemesanan = Pemesanan::where('nama_pemesan', 'like', "%" . $keyword . "%")->whereDate('check_in','like', "%".$date."%")->paginate(5);
        return view('resepsionis.tabelr', compact('pemesanan', 'keyword', 'date'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id, Pemesanan $pemesanan)
    {
        //
        $pemesanan = Pemesanan::findOrFail($id);
        $items = Pemesanan::where('id', $id)->update([
            'status' => $request->status
        ]);
        return redirect()->route('index.index')
                        ->with('pemesanan Disetujui');
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
}
