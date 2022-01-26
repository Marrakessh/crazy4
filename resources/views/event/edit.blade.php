@extends('admin.layout')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h2>{{ $event->title }} -Update Details</h2>
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

                    <form action="{{ route('event.update',$event->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Event Name:</strong>
                                    <input type="text" name="title" value="{{ $event->title }}" class="form-control" placeholder="event Title">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Description:</strong>
                                    <textarea class="form-control" style="height:70px" name="description" placeholder="Description">{{ $event->description }}</textarea>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
{{--                                    <label for="venue_id" class="inline-flex items-center">--}}
                                        <label><strong>Venue:</strong></label>
                                        <select name="venue_id" class="form-control">
                                            <option value="{{ $event->venue->id }}">{{ $event->venue->name }}</option>
                                            @foreach($venues as $venue)
                                                <option value="{{ $venue->id }}">{{ $venue->name }}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group" >
                                    <label ><strong>Date-Time:</strong></label>
                                    <x-datepicker wire:model="datetime"  value="{{$event->datetime}}" name="datetime" placeholder="{{ Carbon\Carbon::parse($event->datetime)->format('l jS \of F Y') }}" class="form-control bg-white" />
                                </div>
                            </div>

{{--                            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                                <div class="form-group">--}}
{{--                                    <strong>Date-Time:</strong>--}}
{{--                                    <div class='input-group date' id='datetimepicker'>--}}
{{--                                        <input type='text' name="datetime" value="{{ $event->datetime }}"placeholder="{{ Carbon\Carbon::parse($event->datetime)->format('l jS \of F Y') }}" class="form-control" />--}}
{{--                                        <span class="input-group-addon">--}}
{{--                                            <span class="glyphicon glyphicon-calendar"></span>--}}
{{--                                            </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Artists: </strong>
                                    @foreach($artists as $artist)

                                        <br/><input type="checkbox" name="artists[]" value="{{ $artist->id }}"
                                                    {{ $artist->events->contains($event->id) ? 'checked' : '' }}
                                                    @if(in_array($artist->id,old('artist',[]))) checked  @endif>
                                        <label for="{{ $artist->name }}">{{ $artist->name }}</label>

                                    @endforeach
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Price:</strong>
                                    <input type="text" name="price" value="{{ $event->price }}" class="form-control" placeholder="Price">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Discount Price:</strong>
                                    <input type="text" name="reduced_price" value="{{ $event->reduced_price }}" class="form-control" placeholder="Discount Price">
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
