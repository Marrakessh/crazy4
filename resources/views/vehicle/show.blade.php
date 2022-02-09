@extends('admin.layout')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h2>{{ $vehicle->registrationNumber }} -Vehicle Details</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 mt-1 mr-1">
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('vehicle.index') }}"> Back</a>
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
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Vehicle:</strong>
                                {{ $vehicle->registrationNumber }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Brand:</strong>
                                {{ $vehicle->brand }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Model:</strong>
                                {{ $vehicle->carModel }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Colour:</strong>
                                {{ $vehicle->colour }}
                            </div>
                        </div>
{{--                        <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <strong>County:</strong>--}}
{{--                                {{ $vehicle->county }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <strong>City / Town:</strong>--}}
{{--                                {{ $vehicle->city }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <strong>Postcode:</strong>--}}
{{--                                {{ $vehicle->postcode }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <strong>vehicle Phone:</strong>--}}
{{--                                {{ $vehicle->vehicle_phone }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <strong>Email:</strong>--}}
{{--                                {{ $vehicle->email }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <strong>Website:</strong>--}}
{{--                                <a href="{{ $vehicle->website }}">{{ $vehicle->website }}</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <strong>Contact Name:</strong>--}}
{{--                                {{ $vehicle->contact_name }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <strong>vehicle Capacity:</strong>--}}
{{--                                {{ $vehicle->capacity }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
