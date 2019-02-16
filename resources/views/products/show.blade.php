@extends('layouts.app')
@section('content')
    <h3>
        {{$product->name}}
    </h3>
    <p>
        description :{{$product->description}}
    </p>
    <p>
        price :{{$product->price}} $
    </p>
    <p>
        weight :{{$product->weight}}
    </p>
    <p>
        owner :{{$product->user->name}}
    </p>
    <p>
        Categories :
        @foreach($product->categories as $categoy)
            <em>
                {{$categoy->name.','}}
            </em>
        @endforeach
    </p>
@endsection