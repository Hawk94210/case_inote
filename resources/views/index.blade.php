@extends('master')
@section('content')
<a href="{{ route('show.create') }}"><button type="button" class="btn btn-success">Thêm mới</button></a>
<a href="{{ route('logout') }}"><button type="button" class="btn btn-warning">Logout</button></a>

<table class="table table-dark" >
    <thead>
        <tr>
            <th scope="col">Stt</th>
            <th scope="col">Name</th>
            <th scope="col">Note</th>
            <th scope="col" colspan="2">Service</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($inotes as $key => $inote)
        <tr>
            <td scope="row">{{ $key +1 }}</td>
            <td>{{ $inote->name }}</td>
            <td>{{ $inote->note }}</td>
            <td><a href="{{ route('show.edit',$inote->id) }}"><button type="submit" class="btn btn-primary">Edit</button></a></td>
            <td><a href="{{ route('delete',$inote->id) }}"><button type="submit" class="btn btn-danger">Delete</button></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection