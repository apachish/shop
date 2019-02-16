@extends('layouts.app')
@section('content')
    <table class="table">
        <tr>
            <th>
                product name
            </th>
            <th>
                creator
            </th>
            <th>

            </th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>
                    <a href={{"/products/".$product->id}}>
                        {{$product->name}}
                    </a>
                </td>
                <td>
                    {{$product->user->name}}
                </td>
                @can('update',$product)
                <td>
                    <a href="{{route('products.edit',['id'=>$product->id])}}" class="btn btn-primary">Update</a>
                </td>
                    @else
                    <td></td>
                    @endcan
            </tr>

        @endforeach
    </table>
    <div class="mt-3"></div>
    <a href="{{route('products.create')}}"  class="btn btn-success btn-block">create</a>

@endsection