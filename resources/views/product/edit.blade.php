@extends('layouts.form')

@section('content')
<div class="container-fluid">
    <div class="pull-right">
        <a class="btn btn-danger" href="{{ route('product.index') }}"> Back</a>
    </div>
    <h2 class="mt-4 text-center"><strong>Edit Product</strong></h2><br>

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
    
    @error('product')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror

    <form method="POST" action="{{route('product.update')}}" class="form w-100" novalidate="novalidate">
        @csrf
        <input type="hidden" name="id" value="{{$product->id}}"/>
        <div class="fv-row mb-7">
            <label for="name" class="form-label fw-bolder text-dark fs-6">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control form-control-lg form-control-solid" value="{{$product->name}}" placeholder="Name">
        </div>
        <div class="fv-row mb-7">
            <label for="description" class="form-label fw-bolder text-dark fs-6">{{ __('Description') }}</label>
            <input type="text" name="description" class="form-control form-control-lg form-control-solid" value="{{$product->description}}" placeholder="Description">
        </div>
        <div class="fv-row mb-7">
            <label for="price" class="form-label fw-bolder text-dark fs-6">{{ __('Price') }}</label>
            <input type="number" name="price" class="form-control form-control-lg form-control-solid" value="{{$product->price}}" placeholder="Price (in numbers)">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-lg btn-primary">
                <span class="indicator-label">{{ __('Update') }}</span>
                <span class="indicator-progress">Please wait...
				<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
    </form>
</div>
@endsection