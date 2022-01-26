@extends('admin.layout')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-12 mt-1 mr-1">
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ url()->previous() }}"> Back</a>
                    </div>
                </div>
            </div>
            <h2>{{ $artist->name }} -Artist Details</h2>
        </div>

        <div class="card-body">
            @foreach ($artist->artistimages as $artistimage)
            <div class="float-right">
                <img src="{{ asset('storage/images/artists/'.$artistimage->file_path) }}" alt="Artist Image" height="150px">
                <div class="caption">
                    <p>{{ $artistimage->name }}</p>
                </div>
            </div>
            @endforeach
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
                                <strong>Artist:</strong>
                                {{ $artist->name }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Genres: </strong>
                                @foreach($artist->genres as $genre)
                                    {{ $genre->name }}
                                @endforeach
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Description:</strong>
                                {{ $artist->bio }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Address Line 1:</strong>
                                {{ $artist->address1 }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Address Line 2:</strong>
                                {{ $artist->address2 }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>City / Town:</strong>
                                {{ $artist->city }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>County:</strong>
                                {{ $artist->county }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Postcode:</strong>
                                {{ $artist->postcode }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Artist Phone:</strong>
                                {{ $artist->phone }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Email:</strong>
                                {{ $artist->email }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Website:</strong>
                                <a href="https://{{ $artist->website }}">{{ $artist->website }}</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Contact Name:</strong>
                                {{ $artist->contact_name }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
