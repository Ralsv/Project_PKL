<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    
    <style>
        table.static {
            position: relative;
            border: 1px solid #eeeeee;
        }
    </style>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Data Product</b></p>
        <table class="static" align="center" rules="all" border="5px" style="width: 95%;">
            <tr>
                <th>No</th>
                <th>Type</th>
                <th>Serial Number</th>
                <th>Description</th>
            </tr>
            @foreach ($printproducts as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->type}}</td>
                <td>{!! DNS1D::getBarcodeHTML("$item->serial_number", 'UPCA',2,50) !!}
                    {{ $item->serial_number }}</td>
                <td>{{ $item->description }}</td>
            </tr>
            @endforeach
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>