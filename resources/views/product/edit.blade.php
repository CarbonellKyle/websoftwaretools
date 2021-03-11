@extends('layouts.template')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4 text-center" style="color: #EF3B2D;" ><strong>CRUD</strong></h1>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('product.index') }}"> Back</a>
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

    @if(Session::has('product_updated'))
        <div class="alert alert-success" role="alert">
            {{Session::get('product_updated')}}
        </div>
    @endif
    <form method="POST" action="{{route('product.update')}}">
        @csrf
        <input type="hidden" name="id" value="{{$product->id}}"/>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" value="{{$product->name}}" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <input type="text" name="description" class="form-control" value="{{$product->description}}" placeholder="Description">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="number" name="price" class="form-control" value="{{$product->price}}" placeholder="Price (in numbers)">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>

</div>
@endsection