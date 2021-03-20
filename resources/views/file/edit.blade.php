@extends('layouts.template')

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4 text-center" style="color: #EF3B2D;" ><strong>File Uploader</strong></h1>

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit File</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-info" href="{{ route('file.index') }}"> Back</a>
                </div>
            </div>
        </div><br>

        <div class="col-md-8">
            <div class="card" style="border: 1px solid #EF3B2D; max-width: 550px;">
                <div class="card-header" style="background-color: #EF3B2D; color: #eee;">{{ __('Edit File') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="d-flex">
                        <div><img style="height: auto; width: 100px;" src="{{ asset($filepath) }}"/></div>
                        <div class="ml-4 mt-0">
                            <form method="POST" action="{{ route('file.update') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{$file->id}}"/>
                                <strong>Filename:</strong>
                                <div class="d-flex">
                                    <div class="ml-2"><div class="row">
                                        <div class="form-group">
                                            <input type="text" name="filename" class="form-control" value="{{$file->filename}}" placeholder="Filename">
                                        </div>
                                    <div>
                                    <div><button type="submit" class="btn btn-danger" style="background-color: #EF3B2D; color: #eee">Rename</button></div>
                                </div>
                            </form>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Warning!</strong> Please check your input code<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if(Session::has('file_updated'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('file_updated')}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div><br>

        
    </div>

@endsection