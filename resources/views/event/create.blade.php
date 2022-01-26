@extends('admin.layout')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h2>Add Event</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 mt-1 mr-1">
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('event.index') }}"> Back</a>
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

                    <form action="{{ route('event.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="title"><strong>Event Title:</strong></label>
                                    <input type="text" name="title" class="form-control" placeholder="Event Title">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="description"><strong>Description:</strong></label>
                                    <textarea class="form-control" rows="3" name="description" placeholder="Description"></textarea>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="venue_id" class="inline-flex items-center">
                                        <strong>Venue:</strong></label>
                                    <select name="venue_id" class="form-control">
                                        <option value="" disabled selected>  Select Venue  </option>
                                        @foreach($venues as $venue)
                                            <option value="{{ $venue->id }}">{{ $venue->name }}</option>
                                        @endforeach
                                    </select>
                                    </label>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="artist_id"><strong>Select Artists: </strong></label>
                                    <ul class="checkbox-grid">
                                    @foreach($artists as $artist)

                                        <li><input type="checkbox" name="artists[]" value="{{ $artist->id }}">
                                            <label for="{{ $artist->name }}">{{ $artist->name }}</label></li>

                                    @endforeach
                                    </ul>
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="datetime"><strong>Date-Time:</strong></label>
                                    <x-datepicker wire:model="datetime" name="datetime" class="form-control bg-white" />
                                </div>
                            </div>

{{--                            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label><strong>Date-Time:</strong></label>--}}
{{--                                    <div class='input-group date' id='datetimepicker'>--}}
{{--                                        <input type='text' name="datetime" class="form-control" />--}}
{{--                                        <span class="input-group-addon">--}}
{{--                                            <span class="glyphicon glyphicon-calendar"></span>--}}
{{--                                            </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="price"><strong>Price:</strong></label>
                                    <input type="text" name="price" class="form-control" placeholder="Price">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="reduced_price"><strong>Discount Price:</strong></label>
                                    <input type="text" name="reduced_price" class="form-control" placeholder="Discount Price">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
