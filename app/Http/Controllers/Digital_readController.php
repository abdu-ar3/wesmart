<?php

namespace App\Http\Controllers;

use App\Models\Digital_read;
use Illuminate\Http\Request;

class Digital_readController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = \App\Models\Category::simplePaginate(10);
        return view('digital_reads.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('digital_reads.create');
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
            "title" => "required|min:5|max:24",
            "author" => "required|min:3|max:24",
            "publisher" => "required|min:3|max:24",
            "file_pdf" => "required",
            "category" => "required",
        ])->validate();

        $new_digital_read = new \App\Models\Digital_read();
        $new_digital_read->title = $request->get('title');
        $new_digital_read->description = $request->get('description');
        $new_digital_read->author = $request->get('author');
        $new_digital_read->publisher = $request->get('publisher');
        $new_digital_read->status = $request->get('save_action');
        $new_digital_read->category_id = $request->get('category');

        if ($request->file('cover')) {
            $file = $request->file('cover')->store('pdf_cover', 'public');
            $new_digital_read->cover = $file;
        }

        if ($request->file('file_pdf')) {
            $file_pdf = $request->file('file_pdf')->store('digital_read-covers', 'public');
            $new_digital_read->file_pdf = $file_pdf;
        }


        $new_digital_read->slug = \Str::slug($request->get('title'));
        $new_digital_read->created_by = \Auth::user()->id;
        $new_digital_read->save();
        if ($request->get('save_action') == 'PUBLISH') {
            return redirect()
                ->route('read_student')
                ->with('status', 'E-Book successfully saved and published');
        } else {
            return redirect()
                ->route('digital_reads.create')
                ->with('status', 'digital_read saved as draft');
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
        // $digital_reads = \App\Models\Digital_read::where('category_id', $id);

        $categories = \App\Models\Category::findOrFail($id);
        return view('digital_reads.category_ebook', compact('categories'));
        // return $categories;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $digital_reads = \App\Models\Digital_read::findOrFail($id);
        return view('digital_reads.edit', ['digital_read' => $digital_reads]);
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
        $digital_reads = \App\Models\Digital_read::findOrFail($id);

        $digital_reads->title = $request->get('title');
        $digital_reads->author = $request->get('author');
        $digital_reads->publisher = $request->get('publisher');
        if ($request->file('cover')) {
            $file = $request->file('cover')->store('pdf_cover', 'public');
            $digital_reads->cover = $file;
        }

        $digital_reads->save();

        return redirect()->route('read_student', [$id])->with('status', 'Data E-Book succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $digital_reads = \App\Models\Digital_read::findOrFail($id);
        $digital_reads->delete();
        return redirect()->route('read_student')->with('status', 'Data E-Books successfully deleted');
    }

    public function read_student(Request $request)
    {
        $digital_reads = \App\Models\Digital_read::simplePaginate(16);
        $filterKeyword = $request->get('name');
        if ($filterKeyword) {
            $digital_reads = \App\Models\Digital_read::where(
                "title",
                "LIKE",
                "%$filterKeyword%"
            )->orWhere("author", "LIKE", "%$filterKeyword%")
                ->orWhere("publisher", "LIKE", "%$filterKeyword%")
                ->simplePaginate(16);
        }

        // $digital_reads = \App\Models\Digital_read::paginate(16);
        return view('digital_reads.reads', ['digital_reads' => $digital_reads]);
    }

    public function category_ebook($id)
    {
        $digital_reads = \App\Models\Digital_read::findOrFail($id);
        $digital_reads->category_id = Digital_read::get('category_id');
        return view('digital_reads.category_ebook', compact('digital_reads'));
        // $categories = \App\Models\Category::simplePaginate(10);
        // return view('digital_reads.category_ebook', ['categories' => $categories]);
        // $digital_reads = \App\Models\Digital_read::paginate(16);
        // return view('digital_reads.category_ebook', ['digital_reads' => $digital_reads]);
    }
}
