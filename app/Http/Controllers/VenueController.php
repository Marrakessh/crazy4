<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use Illuminate\Http\Request;


class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
        $venues = Venue::latest()->paginate(5);
        return view('venue.index',compact('venues'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed
     */
    public function create()
    {
        return view('venue.create');
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
            'address1' => 'required',
            'address2',
            'county' =>'required',
            'city'=>'required',
            'postcode'=>'required',
            'venue_phone'=>'required',
            'email'=>'required',
            'website',
            'contact_name'=>'required',
            'capacity'=>'required'
        ]);

        Venue::create($request->all());

        return redirect()->route('venue.index')
                         ->with('success','Venue created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Venue  $venue
     * @return mixed
     */
    public function show(Venue $venue)
    {
        return view('venue.show',compact('venue'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Venue  $venue
     * @return mixed
     */
    public function edit(Venue $venue)
    {
        return view('venue.edit',compact('venue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Venue  $venue
     * @return mixed
     */
    public function update(Request $request, Venue $venue)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'address1' => 'required',
            'address2',
            'county' =>'required',
            'city'=>'required',
            'postcode'=>'required',
            'venue_phone'=>'required',
            'email'=>'required',
            'website',
            'contact_name'=>'required',
            'capacity'=>'required'
        ]);

        $venue->update($request->all());

        return redirect()->route('venue.index')
                         ->with('success','Venue updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Venue  $venue
     * @return Mixed
     */
    public function destroy(Venue $venue)
    {
        $venue->delete();

        return redirect()->route('venue.index')
                         ->with('success','Venue deleted successfully');
    }
}
