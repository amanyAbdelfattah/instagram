@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div>

                <div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="profileinfo">
                        <img src="{{asset('uploads/users/' . $user->image)}}" alt="Not Found" onerror=this.src="img/noimage.jpg">
                        <div class="userinfo">
                            <div class="controls">
                                <h3>{{ Auth::user()->name }}</h3>
                                <a href="{{route('profile.edit' , $user->id)}}">Edit Profile</a>
                                <a href="{{route('post.create')}}"><i class="fas fa-plus"></i></a>
                                <i class="fas fa-cog"></i>
                            </div>
                            <div class="accinfo">
                                <a href="#"><span>0</span> posts</a>
                                <a href="#"><span>148</span> followers</a>
                                <a href="#"><span>136</span> following</a>
                            </div>
                            <div class="bio">
                                <p>{{Auth::user()->bio}}</p>
                            </div>
                        </div>
                    </div>
                    @foreach ($posts as $post)
                    <div class="userpics">
                        <img src="{{asset('uploads/posts/' . $post->pimg)}}" alt="">
                        <div class="overlay">
                            <p><i class="fas fa-heart"></i> 56</p>
                            <p><i class="fas fa-comment"></i> 2</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
