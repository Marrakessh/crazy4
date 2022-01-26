<div>
    <ul>
        @foreach($artists as $artist)
            <div class="card" style="width: 28rem;">
                @foreach ($artist->artistimages as $artistimage)
                    <img class="card-img-top img-thumbnail img-fluid" src="{{ asset('storage/images/artists/'.$artistimage->file_path) }}" alt="Card image cap">
                    <div class="caption">
                        <p> {{ $artistimage->name }}</p>
                    </div>
                @endforeach

                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('home.showartist',$artist->id) }}"> <li> {{ $artist->name }}</li></a></h5>
                    <p class="card-text">{{ $artist->bio }}</p>
                    <p class="card-text">Events {{ $artist->name }} is performing at:
                    <ul class="list-inline">
                    @foreach($artist->events as $event)
                        <li class="list-inline-item"><a href="{{ route('home.showevent',$event->id) }}">{{$event->title}}</a> |</li>
                    @endforeach
                    </ul>
                </div>
            </div>
{{--            <a href="{{ route('home.showartist',$artist->id) }}"> <li> {{ $artist->name }}</li></a>--}}
        @endforeach
    </ul>
</div>
