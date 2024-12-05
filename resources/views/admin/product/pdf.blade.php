<x-app-layout>
 

    <style>

        .button2 {
            display: inline-block;
            transition: all 0.2s ease-in;
            position: relative;
            overflow: hidden;
            z-index: 1;
            color: #090909;
            padding: 8px 25px;
            cursor: pointer;
            font-size: 18px;
            border-radius: 0.5em;
            background: #e8e8e8;
            border: 1px solid #e8e8e8;
            box-shadow: 6px 6px 12px #c5c5c5, -6px -6px 12px #ffffff;
          }

          .button2:active {
            color: #666;
            box-shadow: inset 4px 4px 12px #c5c5c5, inset -4px -4px 12px #ffffff;
          }

          .button2:before {
            content: "";
            position: absolute;
            left: 50%;
            transform: translateX(-50%) scaleY(1) scaleX(1.25);
            top: 100%;
            width: 140%;
            height: 180%;
            background-color: rgba(0, 0, 0, 0.05);
            border-radius: 50%;
            display: block;
            transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
            z-index: -1;
          }

          .button2:after {
            content: "";
            position: absolute;
            left: 55%;
            transform: translateX(-50%) scaleY(1) scaleX(1.45);
            top: 180%;
            width: 160%;
            height: 190%;
            background-color: #06D001;
            border-radius: 50%;
            display: block;
            transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
            z-index: -1;
          }

          .button2:hover {
            color: #ffffff;
            border: 1px solid #06D001;
          }

          .button2:hover:before {
            top: -35%;
            background-color: #06D001;
            transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
          }

          .button2:hover:after {
            top: -45%;
            background-color: #06D001;
            transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
          }

          .button3 {
            position: relative;
            display: inline-block;
            margin: 5px;
            padding: 6px 20px;
            text-align: center;
            font-size: 18px;
            letter-spacing: 1px;
            text-decoration: none;
            color: #6499E9;
            background: transparent;
            cursor: pointer;
            transition: ease-out 0.5s;
            border: 2px solid #6499E9;
            border-radius: 10px;
            box-shadow: inset 0 0 0 0 #6499E9;
            }

            .button3:hover {
            color: white;
            box-shadow: inset 0 -100px 0 0 #6499E9;
            }

            .button3:active {
            transform: scale(0.9);
            }

            .button4 {
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

            .button4:hover {
            color: white;
            box-shadow: inset 0 -100px 0 0 #b80000;
            }

            .button4:active {
            transform: scale(0.9);
            }

            .group {
            display: flex;
            line-height: 28px;
            align-items: center;
            position: relative;
            max-width: 190px;
            }

            .input {
            width: 100%;
            height: 40px;
            line-height: 28px;
            padding: 0 1rem;
            padding-left: 2.5rem;
            border: 2px solid transparent;
            border-radius: 8px;
            outline: none;
            background-color: #f3f3f4;
            color: #0d0c22;
            transition: .3s ease;
            }

            .input::placeholder {
            color: #9e9ea7;
            }

            .input:focus, input:hover {
            outline: none;
            border-color: #06D001;
            background-color: #fff;
            box-shadow: 0 0 0 4px rgb(234 76 137 / 10%);
            }

            .icon {
            position: absolute;
            left: 1rem;
            fill: #9e9ea7;
            width: 1rem;
            height: 1rem;
            }

    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table table-hover">
                        <thead class="">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Type</th>
                                <th scope="col">Serial Number</th>
                                
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($products as $product)
                            <tr>
                                <th class="align-middle">{{ $loop->iteration }}</th>
                                <td class="align-middle">{{ $product->type }}</td>
                                <td class="align-middle">{!! DNS1D::getBarcodeHTML("$product->serial_number", 'UPCA',2,50) !!}
                                  {{ $product->serial_number }}
                                </td>
                                <td class="align-middle">{{ $product->description }}</td>
                                <td class="align-middle">
                                    <div class="btn btn-group" role="group aria-label="Basic example">
                                        <a href="{{ route('admin/products/edit', ['id'=>$product->id]) }}"><button class="button3">Edit</button></a>
                                        <a href="{{ route('admin/products/delete', ['id'=>$product->id]) }}"><button class="button4">Delete</button></a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan="5">Product not found</td>
                            </tr>
                            @endforelse 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    
</x-app-layout>
