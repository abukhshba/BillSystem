@extends('layout')
@section('body-content')

    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>bill number</th>
                <th>user name</th>
                <th>products</th>
                <th>quantity</th>
                <th>price</th>
                <th>total</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($billDetails as $row)
                <tr>
                    <th>{{ $loop->index + 1 }}</th>

                    <td>{{ $row->bill_id}}</td>
                    <td>{{ $row->user_name }}</td>
                    <td>{{ $row->product_name }}</td>
                    <td>{{ $row->quantity }}</td>
                    <td>{{ $row->price }}</td>
                    <td>{{ $row->total }}</td>

                </tr>
            @endforeach
        </tbody>

    </table>
    <h3 class="float-right">Over All Price = {{ $OverAllPrice }}</h3>
@endsection
