{{$notfriend}};
@section('main')
@foreach($notfriend as $friend)
{{ $friend->name()}}<a href="#">Add Friend</a>   
@endforeach
@endsection
