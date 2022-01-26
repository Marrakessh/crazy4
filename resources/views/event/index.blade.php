@extends('admin.layout')

@section('content')
<div class="card mt-5">
    <div class="card-header">
        <div class="float-left">
            <h3>Event Admin Panel</h3>
        </div>

        <div class="float-right ml-4 text-lg leading-7 font-semibold">
            <a class="h4"  href="{{ url('event-search') }}">Search for Event</a>
        </div>
{{--        <div class="float-right">--}}
{{--            <a class="btn btn-primary" href="{{ route('dashboard') }}"> Back</a>--}}
{{--        </div>--}}
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 mt-1 mr-1">
                <div class="float-right">
                    <a class="btn btn-success" href="{{ route('event.create') }}"> Add New Event</a>
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
                        <th>Event</th>
                        <th>Venue</th>
                        <th>Date</th>
                        <th>Description</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($events as $event)
                    <tr>
                        <td>{{ $event->id }}</td>
                        <td>{{ $event->title }}</td>
                        <td>{{ $event->venue->name }}</td>
                        <td>{{ Carbon\Carbon::parse($event->datetime)->format('jS F Y') }}</td>
                        <td>{{ Str::limit($event->description, 50) }}</td>
                        <td>
                            <form action="{{ route('event.destroy',$event->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('event.show',$event->id) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('event.edit',$event->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $events->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
