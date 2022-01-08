@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('post.create') }}"> Create New Post</a>
            </div>
        </div>
    </div>



    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Your Post's</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>H1 Heading</th>
                                    <th>Featured Image</th>
                                    <th>Featured Image Alt Text</th>
                                    <th>Body Content</th>
                                    <th>Meta Title</th>
                                    <th>Meta Description</th>
                                    <th>Slug</th>
                                    <th>Category</th>
                                    <th width="400px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($post as $pst)
                                <tr>
                                    <td>{{ Str::limit( $pst->title,20) }}</td>
                                    <td><img src="{{ asset('/') . $pst->image }}" width="100" height="100"></td>
                                    <td>{{ Str::limit( $pst->altText,20) }}</td>
                                    <td>{!! Str::limit( $pst->content, 50) !!}</td>
                                    <td>{{ Str::limit( $pst->metatitle,20) }}</td>
                                    <td> {{ Str::limit( $pst->meta_description,20) }} </td>
                                    <td>{{ Str::limit( $pst->slug,20) }}</td>
                                    <td>{{ $pst->categories_id }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('post.edit', $pst->id) }}" class="btn btn-primary btn-sm"><i class="mdi mdi-pencil mx-0"></i></a>
                                        <form action=" {{ route('post.destroy', $pst->id) }}" method="post"
                                            style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" type=" submit"><i class="mdi mdi-delete mx-0"></i></button>
                                            </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-12 align-center">
                                {{ $post->links('vendor.pagination.bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>











@endsection
