@extends('layout')
@section('body-content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Delete</th>

            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a class="btn btn-danger" href="{{ url("admin/user/delete/$user->id") }}">delete user</a></td>
                </tr>
                @empty

                <tr>
                  <td class="text-center" colspan="4">no data found</td>
                </tr>
                @endforelse
        </tbody>
    </table>
@endsection
