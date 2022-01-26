<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
        $genres = Genre::latest()->paginate(5);
        return view('genre.index',compact('genres'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed
     */
    public function create()
    {
        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Genre::create($request->all());

        return redirect()->route('genre.index')
                         ->with('success','Genre created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\genre  $genre
     * @return mixed
     */
    public function show(genre $genre)
    {
        return view('genre.show',compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\genre  $genre
     * @return mixed
     */
    public function edit(genre $genre)
    {
        return view('genre.edit',compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\genre  $genre
     * @return mixed
     */
    public function update(Request $request, genre $genre)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $genre->update($request->all());

        return redirect()->route('genre.index')
                         ->with('success','Genre updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\genre  $genre
     * @return mixed
     */
    public function destroy(genre $genre)
    {
        $genre->delete();

        return redirect()->route('genre.index')
                         ->with('success','Genre deleted successfully');
    }
}
