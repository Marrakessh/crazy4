@extends('admin.layout')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h2>Add Service</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 mt-1 mr-1">
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('service.index') }}"> Back</a>
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

                    <form action="{{ route('service.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="vehicle_id" class="inline-flex items-center">
                                        <strong>Vehicle:</strong></label>
                                    <select id="vehicle_id" name="vehicle_id" class="form-control">
                                        <option value="" disabled selected>  Select vehicle  </option>
                                        @foreach($vehicles as $vehicle)
                                            <option value="{{ $vehicle->id }}">{{ $vehicle->registrationNumber }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="customer_id"><strong>Select Customer: </strong></label>
                                    <select name="customer_id" id="customer_id" class="form-control">
                                        <option value="" disabled selected>  Select Customer  </option>
                                    @foreach($customers as $customer)
                                            <option value="{{ $customer->id }}">{{ $customer->title }} {{ $customer->firstname }} {{ $customer->lastname }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>


{{--                            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="booked_at"><strong>Booking Date-Time:</strong></label>--}}
{{--                                    <x-datepicker wire:model="datetime" name="datetime" class="form-control bg-white" />--}}
{{--                                    <input type="text" id="created_at" value="{{Carbon\Carbon::now()}}"  name="created_at" class="form-control" placeholder="{{Carbon\Carbon::now()->format('D jS \of M Y')}}">--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="form-check">
                                <input type="hidden" name="onhold" value="0"/>
                                <input type="checkbox" class="form-check-input" name="onhold" value="1" id="onhold">
                                <label class="form-check-label" for="onhold">Vehicle On Hold</label>
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
