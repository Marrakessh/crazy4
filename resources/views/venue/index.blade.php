@extends('admin.layout')

@section('content')
<div class="card mt-5">
    <div class="card-header">
        <div class="float-left">
            <h3>Venue Admin Panel</h3>
        </div>
{{--        <div class="float-right">--}}
{{--            <a class="btn btn-primary" href="{{ route('dashboard') }}"> Back</a>--}}
{{--        </div>--}}
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 mt-1 mr-1">
                <div class="float-right">
                    <a class="btn btn-success" href="{{ route('venue.create') }}"> Add New Venue</a>
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
                        <th>Venue</th>
                        <th>Description</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($venues as $venue)
                    <tr>
                        <td>{{ $venue->id }}</td>
                        <td>{{ $venue->name }}</td>
                        <td>{{ Str::limit($venue->description, 50) }}</td>
                        <td>
                            <form action="{{ route('venue.destroy',$venue->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('venue.show',$venue->id) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('venue.edit',$venue->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $venues->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
