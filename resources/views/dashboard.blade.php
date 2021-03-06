@extends('layouts.template')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4 text-center" style="color: #EF3B2D;" ><strong>Dashboard</strong></h1>

    <div class="mt-5 text-center">
        <h3 style="color: #EF3B2D">Welcome {{Auth::user()->name}}</h3>
        <p>These are my Activies on Laravel for our Web System Tools 2 Subject.</p>
    </div>
</div>
@endsection