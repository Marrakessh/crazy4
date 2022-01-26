@extends('admin.layout')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h2>Edit Booking</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 mt-1 mr-1">
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('booking.index') }}"> Back</a>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                </div>
                <div class="col-lg-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('booking.update', $booking->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="event_id" class="inline-flex items-center">
                                        <strong>Event:</strong></label>
                                    <select id="event_id" name="event_id" class="form-control">
                                        <option value="{{ $booking->event->id }}" >{{ $booking->event->title }}</option>
                                        @foreach($events as $event)
                                            <option value="{{ $event->id }}">{{ $event->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="customer_id"><strong>Select Customer: </strong></label>
                                    <select name="customer_id" id="customer_id" class="form-control">
                                        <option value="{{ $booking->customer->id }}">{{ $booking->customer->title }} {{ $booking->customer->firstname }} {{ $booking->customer->lastname }}</option>
                                    @foreach($customers as $customer)
                                            <option value="{{ $customer->id }}">{{ $customer->title }} {{ $customer->firstname }} {{ $customer->lastname }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="booked_at"><strong>Booking Date-Time:</strong></label>
{{--                                    <x-datepicker wire:model="datetime" name="datetime" class="form-control bg-white" />--}}
                                    <input type="text" id="booked_at" value="{{Carbon\Carbon::now()}}"  name="booked_at" class="form-control" placeholder="{{Carbon\Carbon::now()->format('D jS \of M Y')}}">
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="tickets_full_price"><strong>No of Tickets Full Price:</strong></label>
                                    <select id="tickets_full_price"  name="tickets_full_price" class="form-control">
                                        <option value="{{ $booking->events()->where('booking_id', $booking->id)->first()->pivot->tickets_full_price }}">{{ $booking->events()->where('booking_id', $booking->id)->first()->pivot->tickets_full_price }}</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="tickets_reduced_price"><strong>No of Tickets Discount Price:</strong></label>
{{--                                    <input type="text" size="4" name="tickets_reduced_price" class="form-control" placeholder="Type No of Tickets Required">--}}
                                    <select name="tickets_reduced_price" id="tickets_reduced_price" class="form-control">
                                        <option value="{{ $booking->events()->where('booking_id', $booking->id)->first()->pivot->tickets_reduced_price }}">{{ $booking->events()->where('booking_id', $booking->id)->first()->pivot->tickets_reduced_price }}</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
