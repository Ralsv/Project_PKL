<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Product') }}
        </h2>
    </x-slot>
    <style>
        .button2 {
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

            .button2:hover {
            color: white;
            box-shadow: inset 0 -100px 0 0 #06D001;
            }

            .button2:active {
            transform: scale(0.9);
            }

          /* From Uiverse.io by adamgiebl */ 
            .button1 {
            position: relative;
            display: inline-block;
            margin: 5px;
            padding: 6px 20px;
            text-align: center;
            font-size: 18px;
            letter-spacing: 1px;
            text-decoration: none;
            color: #b80000;
            background: transparent;
            cursor: pointer;
            transition: ease-out 0.5s;
            border: 2px solid #b80000;
            border-radius: 10px;
            box-shadow: inset 0 0 0 0 #b80000;
            }

            .button1:hover {
            color: white;
            box-shadow: inset 0 -100px 0 0 #b80000;
            }

            .button1:active {
            transform: scale(0.9);
            }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0">Add Product</h1>
                    <hr/>

                    @if (session()->has('error'))
                    <div>
                        {{session('error')}}
                    </div>
                    @endif

                    <p><a href="{{ route('admin/product2s') }}"><button class="button1">Go Back</button></a></p>

                    <form action="{{ route('admin/product2s/save' )}}" method="POST" enctype+"multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col mb-3">
                            <label for="">Type:</label>
                            <input type="text" class="form-control mb-3" name="type" placeholder='Type' " required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="">Serial Number:</label>
                            <input type="text" class="form-control mb-3" name="serial_number" placeholder='Serial_number' " required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="">Description:</label>
                            <input type="text" name="description" class="form-control mb-3" cols="30" rows="5" placeholder='OPEN/NON OPEN' " required></input>
                        </div>
                    </div>

                        <div class="row">
                            <div class+"d-grid">    
                                <button type="submit" class="button2">Submit</button>
                            </div>    
                        </div>
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
