@extends('layouts.admin')
@section('content')

    @if(!$categories->isEmpty())
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('category.create') }}"> Create New Category</a>
            </div>
        </div>
    </div>
    @endif


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    @if($categories->isEmpty())
    <div class="col-md-6">
        <div class="alert alert-primary fade in">
            <h4>There are no categories registrered yet.</h4>
            <p>You can add a categories by clicking on Add button.</p>
            <p><a href="{{ route('category.create') }}" class="btn btn-success waves-effect waves-light">Add
                    <i class="fa fa-plus"></i></a></p>
        </div>
    </div>
    @else
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($categories as  $index=> $category)
        <tr>
            <td>{{   $index }}</td>
            <td>{{ $category->name }}</td>
            <td>

                <form action="{{ route('category.destroy',$category->id) }}" method="POST">
                    <!--<a class="btn btn-info" href="{{ route('category.show',$category->id) }}">Show</a>-->
                    <a class="btn btn-primary" href="{{ route('category.edit',$category->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>
    @endif

@endsection
