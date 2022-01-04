<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TbmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbms = \App\Models\Tbm::paginate(10);
        return view('tbm.index', ['tbms' => $tbms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tbm.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_tbm = new \App\Models\Tbm;

        $new_tbm->nama_tbm = $request->get('nama_tbm');
        $new_tbm->alamat = $request->get('alamat');
        $new_tbm->nama_pengelola = $request->get('nama_pengelola');
        $new_tbm->no_telpon = $request->get('no_telpon');

        $new_tbm->save();
        return redirect()->route('tbm.index')->with('status', 'TBM
       successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbm = \App\Models\Tbm::findOrFail($id);
        return view('tbm.show', ['tbm' => $tbm]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbm = \App\Models\Tbm::findOrFail($id);
        return view('tbm.edit', ['tbm' => $tbm]);
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
        $tbm = \App\Models\Tbm::findOrFail($id);

        $tbm->nama_tbm = $request->get('nama_tbm');
        $tbm->alamat = $request->get('alamat');
        $tbm->nama_pengelola = $request->get('nama_pengelola');
        $tbm->no_telpon = $request->get('no_telpon');

        $tbm->save();

        return redirect()->route('tbm.index', [$id])->with('status', 'TBM succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tbm = \App\Models\Tbm::findOrFail($id);
        $tbm->delete();
        return redirect()->route('tbm.index')->with('status', 'TBM
successfully deleted');
    }
}
