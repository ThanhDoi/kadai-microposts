@if (Auth::user()->is_liked_micropost($micropost->id))
    {!! Form::open(['route' => ['user.unlike', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('unfavorite', ['class' => "btn btn-success btn-xs"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['user.like', $micropost->id]]) !!}
        {!! Form::submit('favorite', ['class' => "btn btn-default btn-xs"]) !!}
    {!! Form::close() !!}
@endif