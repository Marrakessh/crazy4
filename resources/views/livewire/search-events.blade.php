{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-12">--}}
<div>
            <input type="text"  class="form-control" placeholder="Type to search" wire:model="searchTerm" />

            <table class="table table-bordered" style="margin: 10px 0 10px 0;">
                <tr>
                    <th>Title</th>
                    <th>Venue</th>
                </tr>
                @foreach($events as $event)
                    <tr>
                        <td>
                            <a href="{{ route('home.showevent',$event->id) }}">{{ $event->title }}</a>
                        </td>
                        <td>
                            {{ $event->venue->name }}
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $events->links() }}
    </div>
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

