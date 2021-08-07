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
                        <img src="img/Amany.jpeg" alt="">
                        <div class="userinfo">
                            <div class="controls">
                                <h3>{{ Auth::user()->name }}</h3>
                                <a href="#">Edit Profile</a>
                                <a href="#"><i class="fas fa-plus"></i></a>
                                <i class="fas fa-cog"></i>
                            </div>
                            <div class="accinfo">
                                <a href="#"><span>0</span> posts</a>
                                <a href="#"><span>148</span> followers</a>
                                <a href="#"><span>136</span> following</a>
                            </div>
                            <div class="bio">
                                <p><span>full stack developer</span> BIS department<br>"if you want to be respected place a high value of yourself" &#128133; &#128081;<br>Learn to say No</p>
                            </div>
                        </div>
                    </div>
                    <div class="userpics">
                        <img src="img/Amany2.jpeg" alt="">
                        <div class="overlay">
                            <p><i class="fas fa-heart"></i> 56</p>
                            <p><i class="fas fa-comment"></i> 2</p>
                        </div>
                        <img src="img/Amany3.jpeg" alt="">
                        <div class="overlay2">
                            <p><i class="fas fa-heart"></i> 56</p>
                            <p><i class="fas fa-comment"></i> 2</p>
                        </div>
                        <img src="img/Amany4.jpeg" alt="">
                        <div class="overlay3">
                            <p><i class="fas fa-heart"></i> 56</p>
                            <p><i class="fas fa-comment"></i> 2</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
