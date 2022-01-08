@extends('layouts.admin')

@section('pageTitle', 'Update Banner')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Banner</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('banner.index') }}"> Back</a>
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
            <form action="{{ route('banner.update',$Banner->id) }}" method="POST">
            @csrf
            @method('PUT')
                <div class="form-group">
                   <label>H1 Tag</label>
                    <input type="text" class="form-control input-default " name="title" placeholder="Enter your H1 heading here" value="{{ $Banner->title }}">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                   <label>Meta title</label>
                    <input type="text" class="form-control input-default " name="metatitle" placeholder="Enter your Meta Title here" value="{{ $Banner->metatitle }}">
                    @error('metatitle')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                   <label>Featured Image</label>
                  <input type="file" class="form-control-file " id="file-input" name="image" value="{{ $Banner->image }}">
                    @error('image')
                        <span class="invalid-feedback"  role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div id="thumb-output"></div><br>
                </div>

                 <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Update Banner</button>
            </form>
        </div>
    </div>

@endsection
{{-- @push('scripts') --}}
<script type="text/javascript">

    $(document).ready(function(){
     $('#file-input').on('change', function(){ //on file input change
        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
        {

            var data = $(this)[0].files; //this file data

            $.each(data, function(index, file){ //loop though each file
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function(file){ //trigger function on successful read
                    return function(e) {
                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image element
                        $('#thumb-output').append(img); //append image to output element
                    };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });

        }else{
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
     });
    });

    </script>
