<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = \App\Models\Book::paginate(10);
        return view('books.index', ['book' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
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
            "no_hp" => "required|min:12|max:13",
            "alamat" => "required|min:5",
            "pekerjaan" => "required|min:4",
            "instansi" => "required|min:4",
            "jumlah" => "required|min:4",
            "tanggal_pengiriman" => "required|min:4",
        ])->validate();


        // New Donation Book
        $new_book = new \App\Models\Book;

        $new_book->name = $request->get('name');
        $new_book->no_hp = $request->get('no_hp');
        $new_book->alamat = $request->get('alamat');
        $new_book->pekerjaan = $request->get('pekerjaan');
        $new_book->instansi = $request->get('instansi');
        $new_book->jumlah = $request->get('jumlah');
        $new_book->tanggal_pengiriman = $request->get('tanggal_pengiriman');

        $new_book->save();
        return view('books.thanks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $book = \App\Models\Book::findOrFail($id);
        return view('books.show', ['book' => $book]);
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

        return view('books.thanks');
    }

    public function books()
    {
        return view('books.donation');
    }
}
