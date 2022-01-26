@extends('admin.layout')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h2>Add Artist Image</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 mt-1 mr-1">
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('artistimage.index') }}"> Back</a>
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

                    <form action="{{ route('artistimage.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="artist_id" class="inline-flex items-center">
                                    <strong>Artist:</strong></label>
                                <label>
                                    <select name="artist_id" class="form-control">
{{--                                        <option value="{{ $artistimage->artist->id }}">{{ $artistimage->artist->name }}</option>--}}
                                        <option value="" disabled selected>  Select Artist  </option>
                                        @foreach($artists as $artist)
                                            <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </div>
                        </div>

                       <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="caption" class="form-control"><strong>Image Caption:</strong></label>
                                    <input type="text" name="name" class="form-control" id='caption' placeholder="Image Caption">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="file" name="file" required>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-success">Upload Image</button>
                            </div >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
