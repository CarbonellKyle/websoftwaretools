@extends('layouts.template')
@section('content')
    <div class="container-fluid">
        <h1 class="mt-4 text-center" style="color: #EF3B2D;" ><strong>CRUD</strong></h1>

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>View Product</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-info" href="{{ route('product.index') }}"> Back</a>
                </div>
            </div>
        </div><br>
    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $product->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    {{ $product->description }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    {{ $product->price}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date Created:</strong>
                    {{ $product->created_at}}
                </div>
            </div>
        </div>
    </div>
@endsection