@extends('admin.layout')

@section('content')
<div class="card mt-5">
    <div class="card-header">
        <div class="float-left">
            <h3>Artist Image</h3>
        </div>
{{--        <div class="float-right">--}}
{{--            <a class="btn btn-primary" href="{{ route('dashboard') }}"> Back</a>--}}
{{--        </div>--}}
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 mt-1 mr-1">
                <div class="float-right">
                    <a class="btn btn-success" href="{{ route('artistimage.create') }}"> Add New Image</a>
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
                        <th>Name</th>
                        <th>Image</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($images as $image)
                    <tr>
                        <td>{{ $image->id }}</td>
                        <td><p><strong>{{ $image->artist->name }}</strong></p><p>{{ $image->name }}</p></td>

{{--                        <td><img src="{{ $image->file_path }}" alt="Artist Image" height="40px"></td>--}}
                        <td><img src="{{ asset('storage/images/artists/'.$image->file_path) }}" alt="Artist Image" height="40px"></td>
{{--                        <td><img src="/public/image/.'{{Storage::url($image->file_path)}}'" alt="Artist Image" height="40px"></td>--}}

{{--                        {{Storage::url($dato->icono)}}--}}
                        <td>
                            <form action="{{ route('artistimage.destroy',$image->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('artistimage.show',$image->id) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('artistimage.edit',$image->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $images->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
