@extends('layouts.app')
@section('content')

<div class="card m-auto" style="width: 30rem;">
    <img class="card-img-top" src="{{asset('uploads/posts/' . $post->pimg)}}" alt="Card image cap">
    <form method="POST" action="{{route('post.update' , $post->id)}}">
        <div class="form-group">
        @csrf
        {{method_field('PUT')}}
        <div class="card-body post-body">
            <div class="col-md-6">
                <input type="text" name="pdesc" value="{{$post->pdesc}}">

                @error('pdesc')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
            <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-success" style="width: 34%; margin-top: 10%;">Update</button>
            </div>
        </div>
        </div>
        <div class="row">
            @include('sweetalert::alert')
        </div>
    </form>
    </div>

@endsection
