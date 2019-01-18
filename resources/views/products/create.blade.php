@extends('layouts.app')
@section('content')
    <div class="card m-5">
        <div class="card-body">
            <div class="card-title">
                <h5>create product</h5>
            </div>
            <form method="post" action="{{route('products.store')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name"  name="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" class="form-control" name="description" placeholder="Enter Description"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price">
                </div>
                <div class="form-group">
                    <label for="weight">Weight</label>
                    <input type="number" class="form-control" id="weight" name="weight"  placeholder="Enter Weight">
                </div>
                <button type="submit" class="btn btn-success">send</button>
            </form>
        </div>
    </div>
@endsection
