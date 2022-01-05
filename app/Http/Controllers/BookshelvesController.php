<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookshelvesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookshelves = \App\Models\Bookshelves::paginate(10);
        return view('bookshelves.index', ['bookshelves' => $bookshelves]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookshelves.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi
        \Validator::make($request->all(), [
            "name" => "required|min:5|max:20",
            "addres" => "required|min:5",
            "profesion" => "required|min:4",
            "instance" => "required|min:4",
            "total" => "required|min:4",
            "delivery_date" => "required|min:4",
        ])->validate();

        // New Bookshelves
        $new_bookshelves = new \App\Models\Bookshelves;

        $new_bookshelves->name = $request->get('name');
        $new_bookshelves->phone_number = $request->get('phone_number');
        $new_bookshelves->addres = $request->get('addres');
        $new_bookshelves->profesion = $request->get('profesion');
        $new_bookshelves->instance = $request->get('instance');
        $new_bookshelves->total = $request->get('total');
        $new_bookshelves->delivery_date = $request->get('delivery_date');

        $new_bookshelves->save();
        return view('bookshelfs.thanks');
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
    public function update(Request $request, $id)
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

    public function thanks()
    {
        return view('bookshelves.thanks');
    }
}
