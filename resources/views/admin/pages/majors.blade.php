@extends('admin.layout.app')
@section('content')
<table class="table">
    <thead>
    <tr>
        <th>Id </th>
        <th>Title</th>
        <th>Actions</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
        @foreach($majors as $major)

    <tr>
        <td>{{$major->id}}</td>
        <td>{{$major->title}}</td>
        <td> <form action="" method="post">
            @method('update')
            @csrf
            <button type="submit" class="btn btn-danger">Update</button>

        </form>
            </td>
            <td>
                <x-deletebutton action="#" :model=$major/>
                </td>

    </tr>
    @endforeach




    </tbody>
  </table>
  {{$majors->links('pagination::bootstrap-4')}}



@endsection
