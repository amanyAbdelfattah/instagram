@extends('layouts.app')
@section('content')
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Add New Post</h1>
                        </div>
                        <form method="POST" action="{{route('post.store')}}" class="user mx-5" enctype="multipart/form-data">
                            <div class="row">
                                @include('sweetalert::alert')
                            </div>
                            <div class="form-group row">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Upload Profile Picture</label>
                
                                    <div class="col-md-6">
                                        <input type="file" name="pimg">
                                    </div>
                                </div>
                
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Write Description</label>
                
                                    <div class="col-md-6">
                                        <input type="text" name="pdesc">
                
                                        @error('pdesc')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <input type="submit" value="Add Post" class="btn btn-primary btn-user btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection