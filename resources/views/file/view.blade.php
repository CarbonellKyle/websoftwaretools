@extends('layouts.template')

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4 text-center" style="color: #EF3B2D;" ><strong>File Uploader</strong></h1>

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>View File</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-info" href="{{ route('file.index') }}"> Back</a>
                </div>
            </div>
        </div><br>

        <div class="col-md-8">
        <div class="card" style="border: 1px solid #EF3B2D; max-width: 550px;">
            <div class="card-header" style="background-color: #EF3B2D; color: #eee;">{{ __('View File Details') }}</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="d-flex">
                    <div><img style="height: auto; width: 150px;" src="{{ asset($filepath) }}"/></div>
                    <div class="ml-2 mt-1">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Filename:</strong>
                                {{ $file->filename }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Filetype:</strong>
                                {{ $file->filetype }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Date Uploaded:</strong>
                                {{ $file->created_at }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Date Updated:</strong>
                                {{ $file->updated_at }}
                            </div>
                        </div>
                    </div>
                </div>
    </div>
@endsection