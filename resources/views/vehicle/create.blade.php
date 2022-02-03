@extends('admin.layout')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h2>Add Vehicle</h2>
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

                    <form action="{{ route('vehicle.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Registration Number:</strong>
                                    <input type="text" name="registrationNumber" class="form-control" placeholder="Registration Number">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Brand:</strong>
                                    <input type="text" class="form-control" name="brand" placeholder="Brand">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Model:</strong>
                                    <input type="text" name="carModel" class="form-control" placeholder="Model">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Colour:</strong>
                                    <input type="text" name="colour" class="form-control" placeholder="Colour">
                                </div>
                            </div>
{{--                            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                                <div class="form-group">--}}
{{--                                    <strong>City / Town:</strong>--}}
{{--                                    <input type="text" name="city" class="form-control" placeholder="City / Town">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                                <div class="form-group">--}}
{{--                                    <strong>County:</strong>--}}
{{--                                    <input type="text" name="county" class="form-control" placeholder="County">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                                <div class="form-group">--}}
{{--                                    <strong>Postcode:</strong>--}}
{{--                                    <input type="text" name="postcode" class="form-control" placeholder="Postcode">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                                <div class="form-group">--}}
{{--                                    <strong>vehicle Phone:</strong>--}}
{{--                                    <input type="text" name="vehicle_phone" class="form-control" placeholder="vehicle Phone">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                                <div class="form-group">--}}
{{--                                    <strong>Email:</strong>--}}
{{--                                    <input type="text" name="email" class="form-control" placeholder="Email">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                                <div class="form-group">--}}
{{--                                    <strong>Website:</strong>--}}
{{--                                    <input type="text" name="website" class="form-control" placeholder="Website">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                                <div class="form-group">--}}
{{--                                    <strong>Contact Name:</strong>--}}
{{--                                    <input type="text" name="contact_name" class="form-control" placeholder="Contact Name">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                                <div class="form-group">--}}
{{--                                    <strong>vehicle Capacity:</strong>--}}
{{--                                    <input type="text" name="capacity" class="form-control" placeholder="vehicle Capacity">--}}
{{--                                </div>--}}
{{--                            </div>--}}
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
