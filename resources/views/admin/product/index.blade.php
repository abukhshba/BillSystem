@extends('layout')
@section('body-content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>name</th>
                <th>price</th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a class="btn btn-danger" href="{{ url("admin/product/delete/$product->id") }}">delete</a>
                    </td>
                </tr>
                @empty

                <tr>
                  <td class="text-center" colspan="6">no data found</td>
                </tr>
                @endforelse
        </tbody>
    </table>
@endsection
