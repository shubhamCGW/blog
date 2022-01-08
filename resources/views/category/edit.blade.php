@extends('layouts.admin')

@section('pageTitle', 'Update Category')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Category</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('category.index') }}"> Back</a>
            </div>
        </div>
    </div>

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
            <form action="{{ route('category.update',$category->id) }}" method="POST">
            @csrf
            @method('PUT')
                <div class="form-group">
                   <label>Category Name</label>
                    <input type="text" class="form-control input-default " name="name" placeholder="Enter category type here" value="{{ $category->name }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                 <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Update Category</button>
            </form>
        </div>
    </div>

@endsection