@extends('admin.layout')

@section('content')
<div class="card mt-5">
    <div class="card-header">
        <div class="float-left">
            <h3>Vehicle Admin Panel</h3>
        </div>
{{--        <div class="float-right">--}}
{{--            <a class="btn btn-primary" href="{{ route('dashboard') }}"> Back</a>--}}
{{--        </div>--}}
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 mt-1 mr-1">
                <div class="float-right">
                    <a class="btn btn-success" href="{{ route('vehicle.create') }}"> Add New vehicle</a>
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
                        <th>Car Reg</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($vehicles as $vehicle)
                    <tr>
                        <td>{{ $vehicle->id }}</td>
                        <td>{{ $vehicle->registrationNumber }}</td>
                        <td>{{ $vehicle->brand }}</td>
                        <td>{{ $vehicle->carModel }}</td>
                        <td>
                            <form action="{{ route('vehicle.destroy',$vehicle->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('vehicle.show',$vehicle->id) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('vehicle.edit',$vehicle->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $vehicles->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
