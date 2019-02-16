@extends('layouts.app')
@section('content')
    <div class="card m-5">
        <div class="card-body">
            <div class="card-title">
                <h5>update product</h5>
            </div>
            <form method="post" action="{{route('products.update',['id'=>$product->id])}}">
                {{--{{csrf_field()}}--}}
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" value="{{$product->name}}" name="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" class="form-control" name="description" placeholder="Enter Description">{{$product->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price"  value="{{$product->price}}" placeholder="Enter Price">
                </div>
                <div class="form-group">
                    <label for="weight">Weight</label>
                    <input type="number" class="form-control" id="weight" name="weight" value="{{$product->weight}}"  placeholder="Enter Weight">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" name="category_id[]" id="category" multiple>
                        @foreach($categories as $category)
                           <option {{$product->categories->contains('id',$category->id) ? 'selected': ''}}
                                   value="{{$category->id}}" >
                               {{$category->name}}
                           </option>
                        @endforeach
                    </select>
                </div>
                @include('products.error')
                <button type="submit" class="btn btn-primary">update</button>
            </form>
        </div>
    </div>
@endsection
