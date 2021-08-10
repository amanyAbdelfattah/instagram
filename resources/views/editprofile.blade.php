@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="{{route('profile.update' , $user->id)}}"
                enctype="multipart/form-data">

                

                <div class="form-group row">
                @csrf
                {{method_field('PUT')}}
                    <label class="col-md-4 col-form-label text-md-right">Upload Profile Picture</label>

                    <div class="col-md-6">
                        <input type="file" name="image">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">Username</label>

                    <div class="col-md-6">
                        <input type="text" name="name" value="{{$user->name}}">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">Bio</label>

                    <div class="col-md-6">
                        <textarea id="w3review" name="bio" rows="4" cols="50" placeholder="Describe yourself"></textarea>

                        @error('bio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-success">
                            Update
                        </button>
                    </div>
                </div>
                <div class="row">
                    @include('sweetalert::alert')
                </div>
            </form>
        </div>
    </div>
</div>
@endsection