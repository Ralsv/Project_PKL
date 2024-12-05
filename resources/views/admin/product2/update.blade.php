<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <h1 class="mb-0">Edit Product</h1>  
                  <hr/>
                  <form action="{{ route('admin/product2s/update', $product2s->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col mb-3">
                            <label for="">Type:</label>
                            <input type="text" class="form-control mb-3" name="type" placeholder='Type' value="{{$product2s->type}}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="">Serial Number:</label>
                            <input type="text" class="form-control mb-3" name="serial_number" placeholder='Serial_number' value="{{$product2s->serial_number}}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="">Description:</label>
                            <input type="text" name="description" class="form-control mb-3" cols="30" rows="5" placeholder='OPEN/NON OPEN' value="{{$product2s->description}}" required></input>
                        </div>
                    </div>

                    <div class="row">
                        <div class+"d-grid">    
                            <button class="btn btn-warning">Update</button>
                        </div>    
                    </div>

                  </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
