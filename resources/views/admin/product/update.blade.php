<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>
    <style>
        .button3 {
            position: relative;
            display: inline-block;
            margin: 5px;
            padding: 6px 20px;
            text-align: center;
            font-size: 18px;
            letter-spacing: 1px;
            text-decoration: none;
            color: #06D001;
            background: transparent;
            cursor: pointer;
            transition: ease-out 0.5s;
            border: 2px solid #06D001;
            border-radius: 10px;
            box-shadow: inset 0 0 0 0 #06D001;
            }

            .button3:hover {
            color: white;
            box-shadow: inset 0 -100px 0 0 #06D001;
            }

            .button3:active {
            transform: scale(0.9);
            }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <h1 class="mb-0">Edit Product</h1>  
                  <hr/>
                  <form action="{{ route('admin/products/update', $products->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col mb-3">
                            <label for="">Type:</label>
                            <input type="text" class="form-control mb-3" name="type" placeholder='Type' value="{{$products->type}}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="">Serial Number:</label>
                            <input type="text" class="form-control mb-3" name="serial_number" placeholder='Serial_number' value="{{$products->serial_number}}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="">Description:</label>
                            <input type="text" name="description" class="form-control mb-3" cols="30" rows="5" placeholder='OPEN/NON OPEN' value="{{$products->description}}" required></input>
                        </div>
                    </div>

                    <div class="row">
                        <div class+"d-grid">    
                            <button class="button3">Update</button>
                        </div>    
                    </div>

                  </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
