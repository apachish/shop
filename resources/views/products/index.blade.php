<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Document</title>
</head>
<body>
    @foreach($products as $product)
        <div>
            <a href={{"/products/".$product->id}}>
                {{$product->name}}
            </a>
        </div>

    @endforeach
</body>
</html>