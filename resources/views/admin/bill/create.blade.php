@extends('layout')
@section('body-content')
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Post Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ url('admin/bill/store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div id="parentDiv">
                            <div class="form-group">
                                

                                <label class="" for="name">Select user</label>
                                <div class="mb-6 ">
                                    <select name="user_id" class="form-control">
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div id="test" name="test">
                                    <label class="" for="name">Select products</label>
                                    <div class="mb-6 " id="">
                                        <select id="" name="product_id[]" class="form-control">
                                            @foreach ($products as $product)
                                                <option  value="{{ $product->id }}">{{ $product->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <label for="name">quantity</label>
                                    <input type="number" class="form-control" name="quantity[]" id="quantity"
                                        placeholder="quantity">
                                </div>


                            </div>

                        </div>
                        <button type="button" id="add" class="btn btn-info my-2">Add product+</button>
                        <div class="form-group">
                            <input type="hidden" id="billDetails" name="billDetails"  >
                            <input id="saveButton" type="submit" class="btn btn-success col-12" value="save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js.js') }}"></script>
@endsection
