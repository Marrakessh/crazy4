<div class="container">
    <div class="row">
        <div class="col-md-12">

            <input type="text"  class="form-control" placeholder="Type to search" wire:model="searchTerm" />

            <table class="table table-bordered" style="margin: 10px 0 10px 0;">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                @foreach($artists as $artist)
                    <tr>
                        <td>
                            <a href="{{ route('home.showartist',$artist->id) }}">{{ $artist->name }}</a>
                        </td>
                        <td>
                            {{ $artist->email }}
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $artists->links() }}
        </div>
    </div>
</div>
