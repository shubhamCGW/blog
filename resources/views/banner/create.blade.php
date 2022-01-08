@extends('layouts.admin')

@section('pageTitle', 'Create A Banner')

@section('content')
    <h1 class="display-6">Create New Banner</h1>

    <hr/>

    <!-- if validation in the controller fails, show the errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

     <div class="card-body">
        <div class="basic-form">
             <form method="POST" action="{{ route('banner.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name='categories_id' value="1">
                <div class="form-group">
                   <label>H1 Tag</label>
                    <input type="text" class="form-control input-default " name="title" placeholder="Enter your H1 heading here" value="{{ old('title') }}">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                   <label>Sub title</label>
                    <input type="text" class="form-control input-default " name="metatitle" placeholder="Enter your Meta Title here" value="{{ old('metatitle') }}">
                    @error('metatitle')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                   <label>Featured Image</label>
                  <input type="file" class="form-control-file " id="file-input" name="image" value="{{ old('image') }}">
                    @error('image')
                        <span class="invalid-feedback"  role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div id="thumb-output"></div><br>
                </div>

                 <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Create Banner</button>
            </form>
        </div>
    </div>

@endsection
