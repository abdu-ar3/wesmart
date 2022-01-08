<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = \App\Models\Category::paginate(10);
        return view('categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
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
            "deskripsi" => "required|min:10",
            "sinopsis" => "required|min:12",
        ])->validate();


        // New Category
        $name = $request->get('name');
        $new_category = new \App\Models\Category;
        $new_category->name = $name;

        $new_category->deskripsi = $request->get('deskripsi');
        $new_category->sinopsis = $request->get('sinopsis');

        if ($request->file('image')) {

            $image_path = $request->file('image')
                ->store('category_images', 'public');

            $new_category->image = $image_path;
        }
        $new_category->created_by = \Auth::user()->id;
        $new_category->slug = \Str::slug($name, '-');
        $new_category->save();
        return redirect()->route('categories.index')->with(
            'status',
            'Category successfully created'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //$categories = \App\Models\Category::findOrFail($id);
        $digital_reads = \App\Models\Digital_read::where('category_id', $id);
        $categories = DB::table('categories')
            ->select(DB::raw('COUNT(digital_reads.id) AS cnt_book'), 'categories.*')
            ->leftJoinSub($digital_reads, 'digital_reads', function ($join) {
                $join->on('categories.id', '=', 'digital_reads.category_id');
            })
            ->where('categories.id', $id)
            ->groupBy(
                'categories.id',
                'categories.name',
                'categories.slug',
                'categories.deskripsi',
                'categories.sinopsis',
                'categories.image',
                'categories.created_by',
                'categories.updated_by',
                'categories.deleted_by',
                'categories.created_at',
                'categories.updated_at',
                'categories.deleted_at'
            )
            ->get();
        return view('frontend/digital.sinopsis', ['categories' => $categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category_to_edit = \App\Models\Category::findOrFail($id);
        return view('categories.edit', ['category' => $category_to_edit]);
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
        $name = $request->get('name');
        $slug = $request->get('slug');
        $category = \App\Models\Category::findOrFail($id);
        $category->name = $name;
        $category->slug = $slug;
        if ($request->file('image')) {
            if ($category->image && file_exists(storage_path('app/public/' .
                $category->image))) {
                \Storage::delete('public/' . $category->name);
            }
            $new_image = $request->file('image')->store(
                'category_images',
                'public'
            );
            $category->image = $new_image;
        }
        $category->updated_by = \Auth::user()->id;

        $category->slug = \Str::slug($name);
        $category->save();
        return redirect()->route('categories.index', [$id])->with(
            'status',
            'Category successfully updated'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = \App\Models\Category::findOrFail($id);
        $category->delete();
        return redirect()->route('categories.index')
            ->with('status', 'Category successfully moved to trash');
    }

    public function trash()
    {
        $deleted_category = \App\Models\Category::onlyTrashed()->paginate(10);
        return view('categories.trash', ['categories' => $deleted_category]);
    }

    public function search()
    {
        $categories = \App\Models\Category::orderBy('name')->get();
        $category_data = "";
        foreach ($categories as $category) {
            $category_data .= '<option value="' . $category->id . '">' . $category->name . '</option>';
        }
        //var_dump($category_data);
        return $category_data;
    }
}
