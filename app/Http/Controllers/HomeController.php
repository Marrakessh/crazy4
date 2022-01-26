<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Home;
use Illuminate\Foundation\Mix;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Artist;
use App\Models\Booking;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Mixed
     */
    public function index()
    {
        return view('frontend.index');
//            ->with('events', Event::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return mixed
     */
    public function show()
    {
        return view('frontend.show-event');
//        return view('frontend.show-event', [
 //           'event' => Event::findOrFail($id)
//        ]);
//            ->with('events', Event::all())
//            ->with('artists', Artist::all())
 //           ->with('venues', Venue::all());
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }

    public function showevent($id)
    {
        return view('frontend.show-event', [
            'event' => Event::findOrFail($id)
        ]);
    }

    public function showartist($id)
    {
        return view('frontend.show-artist', [
            'artist' => Artist::findOrFail($id)
        ]);
    }


    public function searchevents()
    {
        return view('frontend.search-events');
    }

    public function booktickets($id)
    {
       // return 'foo';
        return view('frontend.booktickets', [
            'event' => Event::findOrFail($id)
        ])
            ->with('events', Event::all())
            ->with('customers', Customer::all());
    }
}
