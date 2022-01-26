@extends('admin.layout')

@section('content')
<div class="card mt-5">
    <div class="card-header">
        <div class="float-left">
        <h3>Customer Admin Panel</h3>
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
                    <a class="btn btn-success" href="{{ route('customer.create') }}"> Add Customer</a>
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
                        <th>Cust ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Post Code</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->firstname }}</td>
                        <td>{{ $customer->lastname }}</td>
                        <td>{{ $customer->postcode }}</td>
                        <td>
                            <form action="{{ route('customer.destroy',$customer->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('customer.show',$customer->id) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('customer.edit',$customer->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $customers->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
