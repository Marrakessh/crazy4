<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\ArtistImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArtistImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index()
    {
        $images = ArtistImage::latest()->paginate(5);
        return view('artistimage.index',compact('images'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed
     */
    public function create(ArtistImage $image)
    {
        return view('artistimage.create')
            ->with('artists', Artist::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function store(Request $request)
    {
        // Validate the inputs
        $request->validate([
            'name' => 'required',
            'artist_id' => 'required'
        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('file')) {

            $request->validate( [
                'file' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ] );

            // Save the file locally in the storage/public/artist/ folder
            $request->file->store( 'images/artists', 'public' );

            // Store the record, using the new file hashname which will be its new filename identity.
            $image = new ArtistImage( [
                "artist_id" => $request->get('artist_id'),
               "name"      => $request->get( 'name' ),
               "file_path" => $request->file->hashName()
            ] );
            $image->save(); // Save the record.
        }

        return redirect()->route('artistimage.index')
                         ->with('success','Artist Image added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArtistImage $image
     *
     * @return mixed
     */
    public function show(ArtistImage $artistimage)
    {
       // $image = ArtistImage::all();
        return view('artistimage.show',compact('artistimage'))
            ->with('artists', Artist::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArtistImage  $image
     *
     * @return mixed
     */
    public function edit(ArtistImage $artistimage)
    {
        return view('artistimage.edit',compact('artistimage'))
            ->with('artists', Artist::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Models\ArtistImage  $image
     *
     * @return mixed
     */
    public function update( Request $request, ArtistImage $artistimage)
    {
        $request->validate([
            'artist_id' => 'required',
            'name' => 'required',
            'file' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
        ]);

        if ($request->hasFile('file') && $request->file != '') {

            $image = ArtistImage::find($artistimage->id);

            //Delete old image file in storage
            unlink("storage/images/artists/".$image->file_path);
            //Image::where("id", $image->file_path)->delete();

            // Save the new image file locally in the storage/public/artist/ folder
            $request->file->store( 'images/artists', 'public' );

            //Get hashName for new image and save to Model in DB
            $newImage = $request->file->hashName();
            $image->file_path = $newImage;
            $image->save();
            }
        //Save any updates to name field
        $artistimage->update($request->all());

        return redirect()->route('artistimage.index')
                         ->with('success','Image updated successfully '.$request->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ArtistImage  $image
     *
     * @return mixed
     */
    public function destroy(ArtistImage $artistimage ) {

        $artistimage = ArtistImage::find($artistimage->id);

        unlink("storage/images/artists/".$artistimage->file_path);

        ArtistImage::where("id", $artistimage->id)->delete();

        return redirect()->route('artistimage.index')
                         ->with('success','Artist Image deleted successfully');
    }
}
