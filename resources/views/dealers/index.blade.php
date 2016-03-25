@extends('default')


@section('content')
    <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Zip</th>
        <th>Published Date</th>
      </tr>
    </thead>
    <tbody>
    @foreach($dealers as $dealer)
      <tr>
         <th>{{ $dealer->id }}</th>
        <td>{{ $dealer->name }}</td>
        <td>{{ $dealer->address }}</td>
        <td>{{ $dealer->city }}</td>
        <td>{{ $dealer->state }}</td>
        <td>{{ $dealer->zip }}</td>
        <td>{{ $dealer->published_at }}</td>
      </tr>
    @endforeach
    </tbody>
    </table>

    {!! $dealers->links() !!}
@endsection
