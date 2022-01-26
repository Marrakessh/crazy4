@extends('admin.layout')

@section('content')
    <div class="card mt-5">
        <div class="card-header">

            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('artist.index') }}"> Back</a>
            </div>
            <h2>Add Artist</h2>
        </div>
        <div class="card-body">
{{--            <div class="row">--}}
{{--                <div class="col-lg-12 mt-1 mr-1">--}}
{{--                    <div class="float-right">--}}
{{--                        <a class="btn btn-primary" href="{{ route('artist.index') }}"> Back</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
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

                        <div class="row">
                            <div class="col-lg-12 mt-1 mr-1">
                                <div class="float-right">
                                    <a class="btn btn-success" href="{{ route('artistimage.create') }}"> Upload Images</a>
                                </div>
                            </div>
                        </div>

                    <form action="{{ route('artist.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Artist Name:</strong>
                                    <input type="text" name="name" class="form-control" placeholder="Artist Name">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label><strong>Genres: </strong></label>
                                    <ul class="checkbox-grid">
                                    @foreach($genres as $genre)

                                        <li><input type="checkbox" name="genres[]" value="{{ $genre->id }}">
                                        <label for="{{ $genre->name }}">{{ $genre->name }}</label></li>

                                    @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Biography:</strong>
                                    <textarea class="form-control" rows="3" name="bio" placeholder="Biography"></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Address Line 1:</strong>
                                    <input type="text" name="address1" class="form-control" placeholder="Address Line 1">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Address Line 2:</strong>
                                    <input type="text" name="address2" class="form-control" placeholder="Address Line 2">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>City / Town:</strong>
                                    <input type="text" name="city" class="form-control" placeholder="City / Town">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>County:</strong>
                                    <input type="text" name="county" class="form-control" placeholder="County">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Postcode:</strong>
                                    <input type="text" name="postcode" class="form-control" placeholder="Postcode">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Artist Phone:</strong>
                                    <input type="text" name="phone" class="form-control" placeholder="Artist Phone">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    <input type="text" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Website:</strong>
                                    <input type="text" name="website" class="form-control" placeholder="Website">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Contact Name:</strong>
                                    <input type="text" name="contact_name" class="form-control" placeholder="Contact Name">
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
