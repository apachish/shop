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
@endsection