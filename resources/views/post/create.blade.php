@extends('layouts.admin')
@section('pageTitle', 'Create A Post')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create New Post</h4>
                    <div class="basic-form">
                        <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>H1 Tag</label>
                                <input type="text" class="form-control input-default " name="title"
                                    placeholder="Enter your H1 heading here" value="{{ old('title') }}">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Featured Image</label>
                                <input type="file" class="form-control-file " id="file-input" name="image"
                                    value="{{ old('image') }}">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div id="thumb-output"></div><br>
                            </div>
                            <div class="form-group">
                                <label>Featured Image Alt Text</label>
                                <input type="text" class="form-control input-default " name="altText"
                                    placeholder="Alt text here" value="{{ old('altText') }}">
                                @error('altText')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Body Content</label>
                                <textarea name="content" class="form-control ckeditor"
                                    rows="4">{{ old('content') }}</textarea>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Meta title</label>
                                <input type="text" class="form-control input-default" name="metatitle"
                                    placeholder="Enter your Meta Title here" value="{{ old('metatitle') }}">
                                @error('metatitle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Meta Description</label>
                                <textarea type="text" class="form-control input-default" name="meta_description"
                                    placeholder="Enter your Meta description here">{{ old('meta_description') }}</textarea>
                                @error('meta_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" class="form-control input-default" name="slug"
                                    placeholder="Enter your slug here" value="{{ old('slug') }}">
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
                                    @foreach ($Categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('categories_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('categories_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('categories_id') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Create Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.ckeditor').ckeditor();
            });
        </script>

    @endsection
