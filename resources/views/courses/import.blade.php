@extends('layouts.app')
@section('content')
    <div class="card m-5">
        <div class="card-body">
            <div class="card-title">
                <h5>upload file</h5>
            </div>
            <form method="post" action="{{route('courses.store')}}" enctype="multipart/form-data">
                {{--{{csrf_field()}}--}}
                @csrf
                <div class="form-group">
                    <label for="file">File</label>
                    <input type="file" class="form-control" id="file" value="{{old('name')}}" name="file">
                </div>
                @include('courses.error')
                <button type="submit" class="btn btn-success">send</button>
            </form>
        </div>
    </div>

@endsection