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
        @foreach($users as $user)

    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td> <form action="" method="post">
            @method('update')
            @csrf
            <button type="submit" class="btn btn-danger">Update</button>

        </form>
            </td>
            <td>
                <x-deletebutton action="#" :model=$user/>
                </td>

    </tr>
    @endforeach




    </tbody>
  </table>
  {{$users->links('pagination::bootstrap-4')}}



@endsection
