@extends('default')


@section('content')
    @foreach($dealers as $dealer)
    <p>{{ $dealer->name}}</p>
    @endforeach

    {!! $dealers->links() !!}
@endsection
