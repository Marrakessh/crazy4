@extends('admin.layout')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <div class="float-left">
            <h2>{{ $artist->name }} -Update Details</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary mt-1" href="{{ route('artist.index') }}"> Back</a>
            </div>
            <div class="col-lg-12 mt-1 mr-1">
                <div class="float-right">
                    <a class="btn btn-success" href="{{ route('artistimage.edit',[$artist->id]) }}"> Add New Image</a>
                </div>
            </div>
        </div>
        <div class="card-body">
{{--            <div class="row">--}}
{{--                <div class="col-lg-12 mt-1 mr-1">--}}
{{--                    --}}
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

                    <form action="{{ route('artist.update',$artist->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Artist Name:</strong>
                                    <input type="text" name="name" value="{{ $artist->name }}" class="form-control" placeholder="Artist Name">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                    <strong>Genres: </strong>
                                    </div>
                                    <ul class="checkbox-grid">
                                    @foreach($genres as $genre)


                                            <li><input type="checkbox" name="genres[]" value="{{ $genre->id }}"
                                                    {{ $genre->artists->contains($artist->id) ? 'checked' : '' }}
                                                    @if(in_array($genre->id,old('genre',[]))) checked  @endif>
                                        <label for="{{ $genre->name }}">{{ $genre->name }}</label></li>

                                    @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Description:</strong>
                                    <textarea class="form-control" style="height:70px" name="bio" placeholder="Biography">{{ $artist->bio }}</textarea>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Address Line 1:</strong>
                                    <input type="text" name="address1" value="{{ $artist->address1 }}" class="form-control" placeholder="Address Line 1">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Address Line 2:</strong>
                                    <input type="text" name="address2" value="{{ $artist->address2 }}" class="form-control" placeholder="Address Line 2">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>City / Town:</strong>
                                    <input type="text" name="city" value="{{ $artist->city }}" class="form-control" placeholder="City / Town">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>County:</strong>
                                    <input type="text" name="county" value="{{ $artist->county }}" class="form-control" placeholder="County">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Postcode:</strong>
                                    <input type="text" name="postcode" value="{{ $artist->postcode }}" class="form-control" placeholder="Postcode">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Artist Phone:</strong>
                                    <input type="text" name="phone" value="{{ $artist->phone }}" class="form-control" placeholder="Artist Phone">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    <input type="text" name="email" value="{{ $artist->email }}" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Website:</strong>
                                    <input type="text" name="website" value="{{ $artist->website }}" class="form-control" placeholder="Website">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Contact Name:</strong>
                                    <input type="text" name="contact_name" value="{{ $artist->contact_name }}" class="form-control" placeholder="Contact Name">
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
