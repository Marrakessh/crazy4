@extends('admin.layout')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <div class="float-left">
                <h2>{{ $customer->title }} {{ $customer->firstname }} {{ $customer->lastname }}</h2>
            </div>

            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('customer.index') }}"> Back</a>
            </div>
            <h3> - Edit Customer</h3>
        </div>
        <div class="card-body">
            <div class="class=row mt-2">
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

                    <form action="{{ route('customer.update',$customer->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="userName">UserName</label>
                                <input type="text" name="username" class="form-control" value="{{ $customer->username }}" id="userName" placeholder="User Name">
                            </div>
                            <div class="col">
                                <label for="title">Title</label>
                                <select class="form-control" name="title" id="title" placeholder="Title">
                                    <option value="{{ $customer->id }}">{{ $customer->title }}</option>
{{--                                    <option selected>Choose...</option>--}}
                                    <option>Mr</option>
                                    <option>Mrs</option>
                                    <option>Ms</option>
                                    <option>Mx</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" value="{{ $customer->firstname }}" name="firstname" id="firstName" placeholder="First name">
                            </div>
                            <div class="col">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" value="{{ $customer->lastname }}" name="lastname" id="lastName" placeholder="Last name">
                            </div>
                        </div>
                        {{--    </form>--}}
                        {{--    --}}
                        {{--    --}}
                        {{--    <form>--}}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" value="{{ $customer->email }}" name="email" id="inputEmail4" placeholder="Email">
                            </div>
{{--                            <div class="form-group col-md-6">--}}
{{--                                <label for="inputPassword4">Password</label>--}}
{{--                                <input type="password" class="form-control" value="{{ $customer->password }}" name="password" id="inputPassword4" placeholder="Password">--}}
{{--                            </div>--}}
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" value="{{ $customer->address1 }}" name="address1" id="inputAddress" placeholder="Address 1">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Address 2</label>
                            <input type="text" class="form-control" value="{{ $customer->address2 }}" name="address2" id="inputAddress2" placeholder="Address 2">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="towncity">Town/City</label>
                                <input type="text" value="{{ $customer->towncity }}" name="towncity" class="form-control" id="towncity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCounty">County</label>
                                <input type="text" class="form-control" value="{{ $customer->county }}" name="county" id="inputCounty" >
                            </div>
                            <div class="form-group col-md-2">
                                <label for="postCode">Post Code</label>
                                <input type="text" class="form-control" value="{{ $customer->postcode }}" name="postcode" id="postCode">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" value="{{ $customer->phone }}" name="phone" id="phone">
                            </div>
                        </div>
                        {{--                <div class="form-group">--}}
                        {{--                    <div class="form-check">--}}
                        {{--                        <input class="form-check-input" type="checkbox" id="gridCheck">--}}
                        {{--                        <label class="form-check-label" for="gridCheck">--}}
                        {{--                            Check me out--}}
                        {{--                        </label>--}}
                        {{--                    </div>--}}
                        {{--                </div>--}}
                        <button type="submit" class="btn btn-primary">Update Details</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
