@extends('layouts.admin')

@section('pageTitle', 'Create A Category')

@section('content')
    <h1 class="display-6">Create New Category</h1>

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
             <form method="POST" action="{{ route('category.store') }}">
            @csrf
                <div class="form-group">
                   <label>Category Name</label>
                    <input type="text" class="form-control input-default " name="name" placeholder="Enter Category type here" value="{{ old('name') }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                 <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Create Category</button>
            </form>
        </div>
    </div>

@endsection
