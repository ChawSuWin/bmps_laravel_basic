<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <ul>
    
    <!-- @for($i=0;$i<count($products);$i++)
            <li>{{$products[$i]}}</li>
        @endfor -->

        @foreach ($products as $product)
            <li>Smile {{$product}}</li>
        @endforeach
         
    </ul>

    <ul>
        @foreach ($products as $key => $product)
            <li>{{$key}} - {{$product}}</li>
        @endforeach
    </ul>

    <ul>
        @foreach ($products as $key => $product)
            @if ($key == 1)
                <li>{{$key}} - {{$product}}</li>
            @endif
        @endforeach
    </ul>
</body>
</html>