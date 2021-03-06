@extends('layouts.template')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4 text-center" style="color: #EF3B2D;" ><strong>CRUD</strong></h1>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
            <div class="d-flex">
                <div class="pull-right">
                    <a class="btn btn-info" href="{{ route('product.index') }}"> Back</a>
                </div>
                <div class="ml-5 mt-2"><p><strong>Note: </strong>Fields marked with '*' must be filled!</p></div>
            </div>
        </div>
    </div><br>

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

    @if(Session::has('product_added'))
        <div class="alert alert-success" role="alert">
            {{Session::get('product_added')}}
        </div>
    @endif
    <form method="POST" action="{{ route('product.addsubmit') }}">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:  *</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:  *</strong>
                    <input type="text" name="description" class="form-control" placeholder="Description">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:  *</strong>
                    <input type="text" name="price" class="form-control" placeholder="Price">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date Created:</strong>
                    <input type="text" name="created_at" class="form-control" placeholder="Date Created">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success">Add</button>
            </div>
        </div>
    </form>

</div>
@endsection