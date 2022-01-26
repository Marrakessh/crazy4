@extends('admin.layout')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <div class="col-lg-12 mt-1 mr-1">
                <div class="float-right">
                    <a class="btn btn-primary" href="{{ url()->previous() }}"> Back</a>
                </div>
            </div>
            <h2>Customer Details</h2>
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
                                <strong>Username:</strong>
                                {{ $customer->username }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>First Name:</strong>
                                {{ $customer->firstname }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Last Name:</strong>
                                {{ $customer->lastname }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Address Line 1:</strong>
                                {{ $customer->address1 }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Address Line 2:</strong>
                                {{ $customer->address2 }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>City / Town:</strong>
                                {{ $customer->towncity }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>County:</strong>
                                {{ $customer->county }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Postcode:</strong>
                                {{ $customer->postcode }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Phone:</strong>
                                {{ $customer->phone }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Email:</strong>
                                {{ $customer->email }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
