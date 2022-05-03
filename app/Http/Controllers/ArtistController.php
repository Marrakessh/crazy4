<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\ArtistImage;
use App\Models\Genre;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Mixed_;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
        $artists = Artist::latest()->paginate(5);
        return view('artist.index',compact('artists'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed
     */
    public function create()
    {
        return view('artist.create')
        ->with('genres', Genre::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Mixed
     */
    public function store(Request $request, Artist $artist)
    {
        $request->validate([
            'name' => 'required',
            'bio' => 'required',
            'address1' => 'required',
            'address2',
            'county' => 'required',
            'city' => 'required',
            'postcode' => 'required',
            'phone' => 'required',
            'email',
            'contact_name' => 'required',
            'youtube',
            'soundcloud'
        ]);

        //Create artist from blade form
        $artist = Artist::create($request->all());

        //Insert 'genre' checkbox array into pivot table
        $genres = $request->get('genres');
        $artist->genres()->sync($genres);



        return redirect()->route('artist.index')
                         ->with('success','Artist  created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return mixed
     */
    public function show(Artist $artist)
    {
        return view('artist.show',compact('artist'));
            //->with('artist', ArtistImage::all());
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return mixed
     */
    public function edit(Artist $artist)
    {
        return view('artist.edit',compact('artist'))
            ->with('genres', Genre::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artist  $artist
     * @return mixed
     */
    public function update(Request $request, Artist $artist)
    {
        $request->validate([
            'name' => 'required',
            'bio' => 'required',
            'address1' => 'required',
            'address2',
            'city' => 'required',
            'county' => 'required',
            'postcode' => 'required',
            'phone' => 'required',
            'email',
            'contact_name' => 'required',
            'youtube',
            'soundcloud'
        ]);

        $artist->update($request->all());

        //Update 'genre' checkbox array into pivot table
        $genres = $request->get('genres');
        $artist->genres()->sync($genres);

        return redirect()->route('artist.index')
                         ->with('success','Artist updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artist  $artist
     * @return mixed
     */
    public function destroy(Artist $artist)
    {
        $artist->delete();

        return redirect()->route('artist.index')
                         ->with('success','Artist deleted successfully');
    }
}
