@extends('layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-11">
                <div class="postinfo">
                    <img src="{{asset('uploads/posts/' . $post->pimg)}}">

                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="control">
                                <h3 class="card-title"><img class="card-img-top" src="{{asset('uploads/users/' . $user->image)}}">{{Auth::user()->name}}</h3>
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary"><i class="fas fa-ellipsis-h"></i></button>
                                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item btn btn-warning m-1" href="{{route('post.edit' , $post->id)}}">Edit Post</a>
                                    <a class="dropdown-item" href="">
                                        <form method="POST" action="{{route('post.destroy' , $post->id)}}">
                                            <div class="row">
                                                @include('sweetalert::alert')
                                            </div>
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <input type="submit" class="btn btn-danger m-1" value="Delete Post">
                                    </form>
                                </a>
                                </div>
                            </div>
                            </div>
                            <p class="card-text">{{$post->pdesc}}</p>
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection