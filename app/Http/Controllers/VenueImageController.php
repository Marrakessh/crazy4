<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use App\Models\VenueImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class VenueImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index()
    {
        $images = VenueImage::latest()->paginate(5);
        return view('venueimage.index',compact('images'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed
     */
    public function create(VenueImage $image)
    {
        return view('venueimage.create')
            ->with('venues', Venue::all());
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
            'venue_id' => 'required'
        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('file')) {

            $request->validate( [
                'file' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ] );

            // Save the file locally in the storage/public/artist/ folder
            $request->file->store( 'images/venues', 'public' );

            // Store the record, using the new file hashname which will be its new filename identity.
            $image = new VenueImage( [
                "venue_id" => $request->get('venue_id'),
               "name"      => $request->get( 'name' ),
               "file_path" => $request->file->hashName()
            ] );
            $image->save(); // Save the record.
        }

        return redirect()->route('venueimage.index')
                         ->with('success','Venue Image added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VenueImage $image
     *
     * @return mixed
     */
    public function show(VenueImage $venueimage)
    {
       // $image = ArtistImage::all();
        return view('venueimage.show',compact('venueimage'))
            ->with('venues', Venue::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VenueImage  $image
     *
     * @return mixed
     */
    public function edit(VenueImage $venueimage)
    {
        return view('venueimage.edit',compact('venueimage'))
            ->with('venues', Venue::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Models\VenueImage  $image
     *
     * @return mixed
     */
    public function update( Request $request, VenueImage $venueimage)
    {
        $request->validate([
            'venue_id' => 'required',
            'name' => 'required',
            'file' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
        ]);

        if ($request->hasFile('file') && $request->file != '') {

            $image = VenueImage::find($venueimage->id);

            //Delete old image file in storage
            unlink("storage/images/venues/".$image->file_path);
            //Image::where("id", $image->file_path)->delete();

            // Save the new image file locally in the storage/public/artist/ folder
            $request->file->store( 'images/venues', 'public' );

            //Get hashName for new image and save to Model in DB
            $newImage = $request->file->hashName();
            $image->file_path = $newImage;
            $image->save();
            }
        //Save any updates to name field
        $venueimage->update($request->all());

        return redirect()->route('venueimage.index')
                         ->with('success','Image updated successfully '.$request->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\VenueImage  $image
     *
     * @return mixed
     */
    public function destroy(VenueImage $venueimage ) {

        $venueimage = VenueImage::find($venueimage->id);

        unlink("storage/images/venues/".$venueimage->file_path);

        VenueImage::where("id", $venueimage->id)->delete();

        return redirect()->route('venueimage.index')
                         ->with('success','Venue Image deleted successfully');
    }
}
