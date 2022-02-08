@extends('admin.layout')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <div class="float-left">
                <span class="inline-flex"><h2>{{ $service->vehicle->registrationNumber }}</h2><h6>Service Details</h6></span>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ url()->previous() }}"> Back</a>
            </div>
        </div>

        <div class="card-body">
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
                                <strong>For Customer:</strong>
                                {{ $service->customer->title }} {{ $service->customer->firstname }} {{ $service->customer->lastname }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Brand:</strong>
                                {{ $service->vehicle->brand }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Model:</strong>
                                {{ $service->vehicle->carModel }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Colour:</strong>
                                {{ $service->vehicle->colour }}
                            </div>
                        </div>
{{--                        <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <strong>Artists: </strong>--}}
{{--                                <ul>--}}
{{--                                @foreach($service->vehicle->artists as $artist)--}}

{{--                                    <li><a href="{{ route('artist.show',$artist->id) }}">{{ $artist->name }}</a></li>--}}

{{--                                @endforeach--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Date:</strong>
                                {{ Carbon\Carbon::parse($service->created_at)->format('l jS \of F Y') }} <strong>  Time:</strong> {{ Carbon\Carbon::parse($service->created_at)->format('g:i a') }}
                            </div>
                        </div>




{{--                        <div class="col-xs-4 col-sm-4 col-md-4">--}}
{{--                            <div class="form-group">--}}
{{--                                <strong>Tickets Full Price: </strong>--}}
{{--                                {{ $service->vehicles()->where('service_id', $service->id)->first()->pivot->tickets_full_price }} @ £{{ $service->vehicle->price }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-4 col-sm-4 col-md-4">--}}
{{--                            <div class="form-group">--}}
{{--                                <strong>Tickets Discount Price: </strong>--}}
{{--                                {{ $service->vehicles()->where('service_id', $service->id)->first()->pivot->tickets_reduced_price }} @ £{{ $service->vehicle->reduced_price }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-4 col-sm-4 col-md-4">--}}
{{--                            <div class="form-group">--}}
{{--                                <strong>Total Price: </strong>--}}
{{--                                £{{ number_format($service->getTotalCost($service),2) }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
