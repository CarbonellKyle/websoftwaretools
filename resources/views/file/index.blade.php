@extends('layouts.template')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4 text-center" style="color: #EF3B2D;" ><strong>File Uploader</strong></h1>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Uploaded Files</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('file.add') }}">Add file</a>
            </div>
        </div>
    </div><br>

    @if(Session::has('delete_file'))
        <div class="alert alert-danger" role="alert">
            {{Session::get('delete_file')}}
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th class="text-center">Filename</th>
            <th class="text-center">FileType</th>
            <th class="text-center">Date Created</th>
            <th class="text-center">Date Updated</th>
            <th class="text-center">Action</th>
        </tr>
        @foreach ($files as $file)
        <tr>
            <td class="text-center" style="max-width: 250px;">{{$file->filename}}</td>
            <td class="text-center">{{$file->filetype}}</td>
            <td class="text-center">{{$file->created_at}}</td>
            <td class="text-center">{{$file->updated_at}}</td>
            <td class="text-center">
                <a class="btn btn-primary px-0" style="min-width: 70px; font-size: 12px;" href="/file/view/{{$file->id}}">View file</a>

                <a class="btn btn-success px-0" style="min-width: 70px; font-size: 12px;" href="/file/edit/{{$file->id}}">Edit filename</a>

                <a class="btn btn-danger px-0" style="min-width: 70px; font-size: 12px;" href="/file/delete/{{$file->id}}">Delete file</a>
            </td>
        </tr>
        @endforeach
    </table>

</div>

@endsection