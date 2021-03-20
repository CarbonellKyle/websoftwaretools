@extends('layouts.template')

@section('content')
     
<div class="container-fluid">
    <h1 class="mt-4 text-center" style="color: #EF3B2D;" ><strong>File Uploader</strong></h1>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Upload New Files</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('file.index') }}"> Back</a>
            </div>
        </div>
    </div><br>

    <div class="col-md-8">
        <div class="card" style="border: 1px solid #EF3B2D; max-width: 550px;">
            <div class="card-header" style="background-color: #EF3B2D; color: #eee;">{{ __('Upload a File') }}</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @error('file')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror

                @if(Session::has('file_uploaded'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('file_uploaded')}}
                    </div>
                @endif
                
                <form action="{{ route('file.addsubmit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex mt-5 pb-0">
                        <div class="mr-5"><input type="file" name="file"><br></div><br>
                        <div style="margin-left: 110px;"><button class="btn btn-danger" style="background-color: #EF3B2D; color: #eee" type="submit">Upload</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div><br>

    

</div>

@endsection