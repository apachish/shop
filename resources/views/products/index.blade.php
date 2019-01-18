@extends('layouts.app')
@section('content')
    @foreach($products as $product)
        <div>
            <a href={{"/products/".$product->id}}>
                {{$product->name}}
            </a>
        </div>

    @endforeach
@endsection