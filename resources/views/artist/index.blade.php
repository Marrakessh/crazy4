@extends('admin.layout')

@section('content')
<div class="card mt-5">
    <div class="card-header">
        <div class="float-left">
        <h3>Artist Admin Panel</h3>
        </div>

        <div class="float-right ml-4 text-xl leading-7 font-semi-bold ">
            <a class="h4" href="{{ url('artist-search') }}">Search for Artist</a>
        </div>
{{--        <div class="float-right">--}}
{{--            <a class="btn btn-primary" href="{{ route('dashboard') }}"> Back</a>--}}
{{--        </div>--}}
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 mt-1 mr-1">
                <div class="float-right">
                    <a class="btn btn-success" href="{{ route('artist.create') }}"> Add New Artist</a>
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
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Artist</th>
                        <th>Description</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($artists as $artist)
                    <tr>
                        <td>{{ $artist->id }}</td>
                        <td>{{ $artist->name }}</td>
                        <td>{{ Str::limit($artist->bio, 50) }}</td>
                        <td>
                            <form action="{{ route('artist.destroy',$artist->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('artist.show',$artist->id) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('artist.edit',$artist->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $artists->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
