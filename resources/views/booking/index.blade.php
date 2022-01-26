@extends('admin.layout')

@section('content')
<div class="card mt-5">
    <div class="card-header">
        <div class="float-left">
        <h3>Booking Admin Panel</h3>
        </div>
        <div class="float-right ml-4 text-xl leading-7 font-semibold ">
            <a class="h4" href="{{ url('customer-lastname-search') }}">Search for Customer</a>
        </div>

{{--        <div class="float-right ml-4 text-lg leading-7 font-semibold">--}}
{{--            <a  href="{{ url('customer-search') }}">Search for Customer</a>--}}
{{--        </div>--}}

{{--        <div class="float-right">--}}
{{--            <a class="btn btn-primary" href="{{ route('dashboard') }}"> Back</a>--}}
{{--        </div>--}}
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 mt-1 mr-1">
                <div class="float-right">
                    <a class="btn btn-success" href="{{ route('booking.create') }}"> Create Booking</a>
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
                        <th>Booking ID</th>
                        <th>Booked on</th>
                        <th>Name</th>
                        <th>Post Code</th>
                        <th>Event</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($bookings as $booking)
                    <tr>
                        <td>{{ $booking->id }}</td>
                        <td>{{ Carbon\Carbon::parse($booking->booked_at)->format('D jS \of M Y') }}</td>
                        <td>{{$booking->customer->title}} {{ $booking->customer->firstname }} {{ $booking->customer->lastname }}</td>
                        <td>{{ $booking->customer->postcode }}</td>
                        <td><a href="{{ route('event.show',$booking->event->id) }}">{{$booking->event->title}}</a></td>

                        <td>
                            <form action="{{ route('booking.destroy',$booking->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('booking.show',$booking->id) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('booking.edit',$booking->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $bookings->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
