@extends('layouts.template')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4 text-center" style="color: #EF3B2D;" ><strong>CRUD</strong></h1>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>View All Products</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('product.add') }}"> Add new product</a>
            </div>
        </div>
    </div><br>

    @if(Session::has('remove_product'))
        <div class="alert alert-danger" role="alert">
            {{Session::get('remove_product')}}
        </div>
    @endif

    <?php $i = 0; ?>
    <table class="table table-bordered">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Name</th>
            <th class="text-center">Description</th>
            <th class="text-center">Price</th>
            <th class="text-center">Date Created</th>
            <th class="text-center" width="250px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td class="text-center">{{++$i}}</td>
            <td class="text-center">{{$product->name}}</td>
            <td class="text-center">{{$product->description}}</td>
            <td class="text-center">{{$product->price}}</td>
            <td class="text-center">{{$product->created_at}}</td>
            <td class="text-center">
                <a class="btn btn-primary" href="/product/view/{{$product->id}}">View</a>

                <a class="btn btn-warning" href="/product/edit/{{$product->id}}">Edit</a>

                <a class="btn btn-danger" href="/product/remove/{{$product->id}}">Remove</a>
            </td>
        </tr>
        @endforeach
    </table>

</div>
@endsection