@extends('layout')
@section('body-content')

        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Post Create') }}
            </h2>
        </x-slot>

        <div class="py-3">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form action="{{ url('admin/product/store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="name">

                                <label for="name">price</label>
                                <input type="text" class="form-control" name="price" id="price"
                                    placeholder="price">

                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success col-12" value="save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
