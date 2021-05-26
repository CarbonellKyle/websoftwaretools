@extends('layouts.template')

@section('content')

<!--begin::Header-->
<div class="card-header align-items-center border-0 mt-4">
    <h3 class="card-title align-items-start flex-column">
        <span class="fw-bolder mb-2 text-dark" style="color: #EF3B2D !important;">Dashboard</span>
        <span class="text-muted fw-bold fs-7">Welcome {{Auth::user()->name}}</span>
    </h3>
</div>
<!--end::header-->
<!--begin::Body-->
<div class="card-body pt-5">
    <div class="container-fluid">
    <h1 class="mt-4 text-center" style="color: #EF3B2D;" ><strong>Welcome to my Laravel Webpage</strong></h1><br>
        <h3> What's up, <strong style="color: #EF3B2D">{{Auth::user()->name}}!</strong></h3>
        <p>These are my Activies on Laravel for our Web System Tools 2 Subject. Feel free to roam around :)</p>
    </div>                                             
</div>
<!--end::body-->
@endsection