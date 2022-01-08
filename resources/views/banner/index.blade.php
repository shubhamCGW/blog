@extends('layouts.admin')
@section('content')

    @if(!$Banners->isEmpty())
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('banner.create') }}"> Create New Banner</a>
            </div>
        </div>
    </div>
    @endif


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    @if($Banners->isEmpty())
    <div class="col-md-6">
        <div class="alert alert-primary fade in">
            <h4>There are no banner registrered yet.</h4>
            <p>You can add a banner by clicking on Add button.</p>
            <p><a href="{{ route('banner.create') }}" class="btn btn-success waves-effect waves-light">Add
                    <i class="fa fa-plus"></i></a></p>
        </div>
    </div>
    @else
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>H1 Heading</th>
            <th>Meta Title</th>
            <th>Featured Image</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($Banners as $index=> $banner)
        <tr>
            <td>{{   $index }}</td>
            <td>{{ $banner->title }}</td>
            <td>{{ $banner->metatitle }}</td>
            {{-- <td><img src="{{asset('/').$pst->image}}"></td> --}}
            <td><img src="{{asset('/').$banner->image }}" width="100" height="100"></td>
            <td>

                <form action="{{ route('banner.destroy',$banner->id) }}" method="POST">
                    <!--<a class="btn btn-info" href="{{ route('banner.show',$banner->id) }}">Show</a>-->
                    <a class="btn btn-primary" href="{{ route('banner.edit',$banner->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>
    @endif




    {{-- {!! $post->links() !!} --}}



@endsection
