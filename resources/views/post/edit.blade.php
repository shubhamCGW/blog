@extends('layouts.admin')

@section('pageTitle', 'Update A Post')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('post.index') }}"> Back</a>
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
            <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>H1 Tag</label>
                    <input type="text" class="form-control input-default " name="title"
                        placeholder="Enter your H1 heading here" value="{{ $post->title }}">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Featured Image</label>
                    <input type="file" class="form-control-file " id="file-input" width="200" height="100" name="image"
                        value="{{ $post->image }}">
                    <img src="{{ asset('/') . $post->image }}" width="200" height="100">
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div id="thumb-output"></div><br>
                </div>
                <div class="form-group">
                    <label>Featured Image Alt Text</label>
                    <input type="text" class="form-control input-default " name="altText" placeholder="Alt text here"
                        value="{{ $post->altText }}">
                    @error('altText')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Body Content</label>
                    <textarea class="form-control ckeditor" name="content">{{ $post->content }}</textarea>
                    @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Meta title</label>
                    <input type="text" class="form-control input-default" name="metatitle"
                        placeholder="Enter your Meta Title here" value="{{ $post->metatitle }}">
                    @error('metatitle')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Meta Description</label>
                    <textarea type="text" class="form-control input-default" name="meta_description"
                        placeholder="Enter your Meta description here">{{ $post->meta_description }}</textarea>
                    @error('meta_description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" class="form-control input-default" name="slug" placeholder="Enter your slug here"
                        value="{{ $post->slug }}">
                    @error('slug')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Categories_id">Category</label>
                    <select id="Categories_id" name="categories_id" class="form-control">
                        <option value="">--- Select Category ---</option>
                        @foreach ($categories as $key => $value)
                            <option value="{{ $key }}" {{ $post->categories_id == $key ? 'selected' : '' }}>
                                {{ $value }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('categories_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('categories_id') }}</strong>
                        </span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Update Post</button>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>

@endsection
